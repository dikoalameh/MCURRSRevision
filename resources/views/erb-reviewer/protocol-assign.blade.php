@section('title', 'Research Protocol Assign')
<x-erb-reviewer>
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-xl:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            RESEARCH PROTOCOL ASSIGN
        </h2>
        <br>

        <div class="top-controls">
            <div class="search-wrapper mt-1 flex max-sm:justify-center max-sm:items-center"></div>
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

            <tbody>
                @foreach($assignedProtocols as $protocolId => $reviews)
                    @php
                        $firstReview = $reviews->first();
                        $reviewerId = auth()->user()->user_ID;

                        // Fetch the current evaluation status for this reviewer
                        $evalRecord = DB::table('tbl_evaluated_reviews')
                            ->where('protocol_ID', $protocolId)
                            ->where('reviewer_ID', $reviewerId)
                            ->first();
                        $currentStatus = $evalRecord->status ?? 'Pending';
                    @endphp
                    <tr class="text-base/7 max-lg:text-sm/6">
                        <td>{{ $firstReview->pi?->researchInformation?->research_title ?? 'No Research Title' }}</td>
                        <td>
                            <a
                                href="{{ route('erb-reviewer.submitted-documents', ['user_id' => $firstReview->protocol?->user?->user_ID]) }}">
                                {{ $firstReview->protocol?->user?->full_name ?? 'No PI Name' }}
                            </a>
                        </td>
                        <td>{{ $firstReview->protocol?->protocol_ID ?? 'N/A' }}</td>
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
                                        <button onclick="updateReviewStatus('{{ $protocolId }}', 'Accepted')"
                                            class="bg-green-600 hover:bg-green-700 text-white px-6 py-1 rounded font-bold shadow transition-all text-xs">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-check-icon lucide-check">
                                                <path d="M20 6 9 17l-5-5" />
                                            </svg>
                                        </button>
                                        <button onclick="updateReviewStatus('{{ $protocolId }}', 'Declined')"
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
                                {{-- Forms Section --}}
                                <div class="mb-2">
                                    <div class="text-xs font-bold mb-1 uppercase pb-0.5">Forms to Accomplish</div>
                                    @foreach($reviews as $review)
                                        @if(is_object($review) && isset($review->form) && $review->form->form_type === 'Forms')
                                            @php
                                                $route = match ($review->form->form_code) {
                                                    'FORM 2(E)' => 'form2e.edit',
                                                    'FORM 2(J)' => 'form2j.edit',
                                                    default => null
                                                };
                                            @endphp

                                            @if($route)
                                                <a href="{{ route($route, ['protocol' => $firstReview->protocol?->protocol_ID]) }}"
                                                    class="block mb-1">
                                                    <button
                                                        class="border border-black p-1 w-full text-xs font-bold hover:bg-gray transition-all uppercase">
                                                        {{ $review->form->form_code ?? 'N/A' }}
                                                    </button>
                                                </a>
                                            @else
                                                <span class="text-[10px] text-red-500 block mb-1">Route not defined for
                                                    {{ $review->form->form_code }}</span>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>

                                {{-- Submissions Section --}}
                                <div>
                                    <div class="text-xs font-bold mb-1 uppercase pb-0.5">Soft Copy Submissions</div>
                                    @foreach($reviews as $review)
                                        @if($review->form?->form_type === 'Submission')
                                            <a href="{{ route('erb-reviewer.submit-documents', ['form' => $review->form->form_id]) }}"
                                                class="block mb-1">
                                                <button
                                                    class="border border-black p-1 w-full text-xs font-bold hover:bg-gray transition-all uppercase">
                                                    Submit {{ $review->form->form_code ?? '' }}
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
        // AJAX Function to update status
        function updateReviewStatus(protocolId, status) {
            const message = status === 'Declined'
                ? "Are you sure you want to DECLINE this protocol? This will notify the Admin to re-assign it."
                : "Are you sure you want to ACCEPT this protocol?";

            if (!confirm(message)) return;

            fetch("{{ route('erb-reviewer.update-status') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    protocol_id: protocolId,
                    status: status
                })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(status === 'Accepted' ? 'You have accepted this review assignment.' : 'You have declined this review assignment.');
                        location.reload();
                    } else {
                        alert("Error: " + (data.message || 'Something went wrong. Please try again.'));
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert("Something went wrong. Please try again.");
                });
        }
    </script>
</x-erb-reviewer>