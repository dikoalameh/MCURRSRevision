@section('title', 'Research Protocol Assign')
<x-iacuc-reviewer>
    <div id="filterModal" onclick="outsideClick(event)"
        class="fixed inset-0 bg-black z-[9999] bg-opacity-50 hidden items-center justify-center overflow-auto overscroll-contain">
        <div class="relative flex items-center justify-center bg-white w-[400px] p-6 rounded-[10px] shadow-md">
            <form action="" class="w-full px-2">
                <div class="flex justify-between items-center mb-2">
                    <div class="text-xl font-bold">Filter</div>
                    <button type="button" onclick="closeModal('filterModal')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-x-icon lucide-x">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
                <div class="w-full">
                    <!-- CALENDAR FILTERING FOR THE COUNT OF SUBMISSION -->
                    <div class="mt-4">
                        <label for="fromDate">From:</label>
                        <input type="date" id="fromDate" class="w-full max-md:text-sm h-[35px] text-sm max-sm:h-[31px]">
                    </div>
                    <div class="mt-4">
                        <label for="toDate">To:</label>
                        <input type="date" id="toDate" class="w-full max-md:text-sm h-[35px] text-sm max-sm:h-[31px]">
                    </div>
                </div>
                <button type="button" onclick="updateTable(); closeModal('filterModal')"
                    class="mt-4 bg-primary text-white tracking-widest uppercase px-4 py-2 rounded">
                    Apply
                </button>
            </form>
        </div>
    </div>
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-xl:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            RESEARCH PROTOCOL ASSIGN
        </h2>
        <br>

        <!-- CSS NG FILTER + SEARCH BAR -->
        <div class="top-controls flex items-center justify-end max-md:flex-col">
            <div class="flex items-center max-sm:block max-sm:text-center max-md:mt-2">
                <button type="button" onclick="openModal('filterModal')" class="bg-primary text-white p-1.5 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-funnel-icon lucide-funnel">
                        <path
                            d="M10 20a1 1 0 0 0 .553.895l2 1A1 1 0 0 0 14 21v-7a2 2 0 0 1 .517-1.341L21.74 4.67A1 1 0 0 0 21 3H3a1 1 0 0 0-.742 1.67l7.225 7.989A2 2 0 0 1 10 14z" />
                    </svg>
                </button>
                <div class="search-wrapper max-sm:mt-3 max-sm:justify-center max-sm:items-center"></div>
            </div>
        </div>

        <table id="myTable" class="display border-collapse w-full shadow-sm rounded-lg text-sm">
            <thead class="bg-primary text-white text-lg/7 max-lg:text-base/7">
                <tr class="header-table">
                    <th class="w-[25%] p-2 text-left">Research Title</th>
                    <th class="w-[20%] p-2 text-left">P.I. Name</th>
                    <th class="w-[15%] p-2 text-left">Research Protocol</th>
                    <th class="w-[15%] p-2 text-left">Type of Review</th>
                    <th class="w-[10%] p-2 text-left">Date</th>
                    <th class="w-[15%] p-2 text-left">Action / Forms</th>
                </tr>
            </thead>

            <tbody class="text-base/7 max-lg:text-sm/6">
                @foreach($assignedProtocols as $protocolId => $reviews)
                    @php
                        $firstReview = $reviews->first();
                        $myReview = \App\Models\EvaluatedReviews::where('protocol_ID', $protocolId)
                            ->where('reviewer_ID', auth()->user()->user_ID)
                            ->first();
                        $currentStatus = $myReview->status ?? 'Pending';
                    @endphp
                    <tr>
                        <td>{{ $firstReview->pi?->researchInformation?->research_title ?? 'No Title' }}</td>
                        <td>
                            <a href="{{ route('iacuc-reviewer.submitted-documents', ['user_id' => $firstReview->protocol?->user?->user_ID]) }}">
                                {{ $firstReview->protocol?->user?->full_name ?? 'No PI Name' }}
                            </a>
                        </td>
                        <td>{{ $protocolId }}</td>
                        <td>{{ $firstReview->protocol?->review_type ?? 'N/A' }}</td>
                        <td>
                            04/24/2026<br>
                            10:04:23 PM
                        </td>
                        @if($currentStatus === 'Pending')
                            <td>
                                <div class="flex flex-col gap-1">
                                    <span class="text-xs font-bold uppercase">Review Invitation</span>
                                    <div class="flex gap-2">
                                        <button onclick="changeStatus('{{ $protocolId }}', 'Accepted')"
                                            class="bg-green-600 hover:bg-green-700 text-white px-6 py-1 rounded font-bold shadow transition-all text-xs">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-check-icon lucide-check">
                                                <path d="M20 6 9 17l-5-5" />
                                            </svg>
                                        </button>
                                        <button onclick="changeStatus('{{ $protocolId }}', 'Declined')"
                                            class="bg-red-600 hover:bg-red-700 text-white px-6 py-1 rounded font-bold shadow transition-all text-xs">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-x-icon lucide-x">
                                                <path d="M18 6 6 18" />
                                                <path d="m6 6 12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </td>

                        @elseif($currentStatus === 'Declined')
                            <td class="p-2 text-center text-red-600 italic font-bold bg-red-50 text-xs">
                                Assignment Declined
                            </td>

                        @else
                            {{-- ACCEPTED: Show Forms and Submissions in a single column --}}
                            <td>
                                @php $hasChecklistInDB = false; @endphp

                                {{-- Forms Section --}}
                                <div class="mb-2">
                                    <div class="text-xs font-bold mb-1 uppercase pb-0.5">Forms to
                                        Accomplish</div>
                                    @foreach($reviews as $review)
                                        @if($review->form?->form_type === 'Forms')
                                            @php
                                                $formCode = $review->form->form_code;
                                                $isChecklist = str_contains(strtolower($formCode), 'checklist');
                                                if ($isChecklist)
                                                    $hasChecklistInDB = true;

                                                $url = $isChecklist
                                                    ? route('iacuc-reviewer.protocol-review-checklist', ['protocol' => $protocolId])
                                                    : url($review->form->form_view);
                                            @endphp
                                            <a href="{{ $url }}" class="block mb-1">
                                                <button
                                                    class="border border-black p-2 w-full text-xs font-bold hover:bg-gray transition-all uppercase">
                                                    {{ $formCode }}
                                                </button>
                                            </a>
                                        @endif
                                    @endforeach

                                    @if(!$hasChecklistInDB)
                                        <a href="{{ route('iacuc-reviewer.protocol-review-checklist', ['protocol' => $protocolId]) }}"
                                            class="block">
                                            <button
                                                class="border border-black p-1 w-full text-xs font-bold hover:bg-gray transition-all uppercase">
                                                Protocol Review Checklist
                                            </button>
                                        </a>
                                    @endif
                                </div>

                                {{-- Submissions Section --}}
                                <div>
                                    <div class="text-xs font-bold mb-1 uppercase pb-0.5">Soft Copy
                                        Submissions</div>
                                    @foreach($reviews as $review)
                                        @if($review->form?->form_type === 'Submission')
                                            <a href="{{ route('iacuc-reviewer.submit-documents', ['formId' => $review->form->form_id]) }}"
                                                class="block mb-1">
                                                <button
                                                    class="border border-black p-2 w-full text-xs font-bold hover:bg-gray transition-all uppercase">
                                                    Submit {{ $review->form->form_code }}
                                                </button>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <script>
        const fromDate = document.getElementById('fromDate');
        const toDate = document.getElementById('toDate');
        const countSpan = document.getElementById("submissionCount");

        // ✅ Register BEFORE DataTable initializes (this runs first since it's in the slot)
        $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
            if (settings.nTable.id !== 'myTable') return true;

            const from = fromDate.value;
            const to = toDate.value;

            if (!from && !to) return true;

            const row = settings.aoData[dataIndex].nTr;
            const rowDate = row ? row.getAttribute('data-date') : '';

            if (from && rowDate < from) return false;
            if (to && rowDate > to) return false;

            return true;
        });

        function updateTable() {
            const table = $('#myTable').DataTable();
            table.draw();
        }
        
        function changeStatus(protocolId, status) {
            const message = status === 'Declined'
                ? "Are you sure you want to DECLINE this review? This will notify the Admin to re-assign it."
                : "Are you sure you want to ACCEPT this review?";

            if (!confirm(message)) return;

            fetch("{{ route('iacuc-reviewer.update-status') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ protocol_id: protocolId, status: status })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(status === 'Accepted' ? 'You have accepted this review assignment.' : 'You have declined this review assignment.');
                        location.reload();
                    } else {
                        alert("Error: " + (data.message ?? 'Something went wrong.'));
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert("Something went wrong. Please try again.");
                });
        }
    </script>
</x-iacuc-reviewer>