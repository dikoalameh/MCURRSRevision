<!-- MODAL FORM -->
<div id="faqModal" class="fixed inset-0 z-50 hidden bg-black/60 items-center justify-center opacity-0">
    <div id="modalBox" class="bg-white w-full max-w-md rounded-lg p-6 relative h-[500px]">
        <!-- CLOSE BUTTON -->
        <div class="flex align-center justify-between mb-5">
            <h2 class="text-xl font-semibold">Frequently Asked Questions</h2>
            <button onclick="closeFaqModal()" class="text-2xl text-gray-500 hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-x-icon lucide-x">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
            </button>
        </div>
        <!-- MODAL FORM MAIN CONTENT SCROLLABLE -->
        <div class="h-[400px] overflow-y-auto overflow-x-hidden">
            <span class="lg:text-lg sm:text-sm md:text-md font-medium">ERB</span>
            <div class="space-y-2 mt-2 mb-4">
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Submission of Document
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        The ERB staff receives and forwards to ERB Chair the required research documents, which were
                        reviewed and approved by the Thesis Adviser and verified by the Research Coordinator using an
                        ERB checklist form.
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Classification
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        The ERB Chair categorizes the protocol as Expedited Review, Full Review, or Exempted
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Assignement of Reviewers
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        The ERB Chair assigns at least 2 primary reviewers and provides them with a communication letter
                        and evaluation forms 2E and 2J.
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Primary Review
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        Primary reviewers evaluate the documents and submit their findings to the ERB Chair within 3
                        working days.
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Consolidation and Decision Letter
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        The ERB Chair consolidates suggestions, recognitions, clarification, and amendment if
                        applicable. A decision letter is issued to the Principal Investigator (PI) acting as
                        faculty/student/ external client researcher with one of the following outcomes:
                        <ul class="list-disc ml-5 mt-2">
                            <li>Resubmission forms 3A and 3B</li>
                            <li>Amendment forms 3D and 3E</li>
                            <li>Certificate of Approval and Ethical Clearance forms 3J and 3O</li>
                        </ul>
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Principal Investigator (PI) Response
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        The PI responds to the instructions in the decision letter within 48 hours (two working days) by
                        submitting any required documents.
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Protocol Termination of Continued Review
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        <p>
                            The ERB terminates the protocol if the PI does not respond within 48 hours.
                        </p>
                        <p class="mt-3">
                            For expedited reviews, resubmissions are reviewed, and results are provided within 1 week.
                        </p>
                        <p class="mt-3">
                            For full reviews, certain cases may require an additional 7 working days, after which
                            results are sent to the PI.
                        </p>
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Second Response by PI
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        The PI addresses the second decision letter by submitting the required actions and documents to
                        the ERB.
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Submission of Documents
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        After the thesis final defense, the PI submits the following to ERB:
                        <ul class="list-decimal ml-5 mt-2">
                            <li>Progress Report 3C (1 soft copy and 1 hard copy)</li>
                            <li>Final Report 3L (1 soft copy and 1 hard copy)</li>
                            <li>Final Thesis Manuscript (1 soft copy and 2 hard copies)</li>
                            <li>IMRAD format of Final Thesis (1 soft copy)</li>
                            <li>Plagiarism certification</li>
                            <li>Grammar Certification</li>
                        </ul>
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        The ERB issues the Final Ethical Clearance
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        ERB issues the final ethical clearance after the PI submits all required documents listed in
                        step no. 10.
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        ERB forwards documents to IRO
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        ERB forwards the IMRAD format, Plagiarism and Grammar Certificates to the Institutional Research
                        Office (IRO). The IRO will issues Certificate of Originality
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        ERB forwards documents to the Registrar
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        ERB forwards to the Registrar the list of consolidated Final Ethical Clearance issued to the PI
                        and 1 hard copy of the Final Thesis Manuscript.
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Registrar forwards a copy of the Final Thesis Manuscript to the Library
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        The registrar forwards to the library a hard copy of the Final Thesis Manuscript.
                    </div>
                </details>
            </div>
            <span class="lg:text-lg sm:text-sm md:text-md font-medium">IACUC</span>
            <div class="space-y-2 mt-2">
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Step 1
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        Basic requirements submission to IRO
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Step 2
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        IACUC Reviews Chapters 1-3 of Protocol
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Step 3
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        Certificate of Approval from IACUC
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Step 4
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        BAI Certification
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Step 5
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        Request to use the Animal Lab Facility (ALF)
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Step 6
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        Animal Carcass disposal in coordination with the Animal Lab Facility House Manager
                    </div>
                </details>
                <details class="group border rounded">
                    <summary class="cursor-pointer px-4 py-3 font-medium bg-gray-100 flex justify-between items-center">
                        Step 7
                        <span class="transition-transform duration-300 group-open:rotate-180">
                            &#11167;
                        </span>
                    </summary>
                    <div class="overflow-hidden px-4 py-3 text-gray-700 border-t">
                        Clean up and sanitation of the ALF by the researchers for IACUC Animal Lab Facility clearance
                        issuance
                    </div>
                </details>
            </div>
        </div>
    </div>
</div>

<nav class="bg-primary h-screen text-white fixed top-0 left-0 hidden xl:flex flex-col overflow-y-auto w-[335px]">
    <header
        class="hidden lg:flex justify-center bg-primary align-center p-2 overflow-hidden overscroll-contain border-darkergray border-b">
        <img src="{{ asset('images/mcu-logo-white.png') }}" alt="STUDENT MAS BAGO" class="w-44">
    </header>
    <div
        class="nav-items overflow-y-auto overscroll-contain px-0 flex-1 bg-primary [&::-webkit-scrollbar]:w-[4px] [&::-webkit-scrollbar-thumb]:bg-[#666666]">
        <ul class="m-4 text-lg p-0 bg-primary">
            <li>
                <a href="{{ url('/student/dashboard') }}" class="w-full flex items-center px-2 py-3 border-none no-underline gap-x-3 hover:text-secondary transition-all duration-300 
                    {{ Request::is('student/dashboard') ? 'text-secondary' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-layout-dashboard-icon lucide-layout-dashboard">
                        <rect width="7" height="9" x="3" y="3" rx="1" />
                        <rect width="7" height="5" x="14" y="3" rx="1" />
                        <rect width="7" height="9" x="14" y="12" rx="1" />
                        <rect width="7" height="5" x="3" y="16" rx="1" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ url('/student/submit-forms') }}"
                    class="w-full flex items-center px-2 py-3 border-none no-underline gap-x-3 hover:text-secondary transition-all duration-300 
                    {{ Request::is('student/submit-forms') || Request::is('student/forms/*') ? 'text-secondary' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-mail-icon lucide-mail">
                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                        <rect x="2" y="4" width="20" height="16" rx="2" />
                    </svg>
                    Submit Forms
                </a>
            </li>
            <li>
                <a href="{{ url('/student/submit-documents') }}" class="w-full flex items-center px-2 py-3 border-none no-underline gap-x-3 hover:text-secondary transition-all duration-300 
                    {{ Request::is('student/submit-documents') ? 'text-secondary' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-paperclip-icon lucide-paperclip">
                        <path
                            d="m16 6-8.414 8.586a2 2 0 0 0 2.829 2.829l8.414-8.586a4 4 0 1 0-5.657-5.657l-8.379 8.551a6 6 0 1 0 8.485 8.485l8.379-8.551" />
                    </svg>
                    Submit Documents
                </a>
            </li>
            <li>
                <a href="{{ url('/student/submit-inquiries') }}" class="w-full flex items-center px-2 py-3 border-none no-underline gap-x-3 hover:text-secondary transition-all duration-300 
                    {{ Request::is('student/submit-inquiries') ? 'text-secondary' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-send-icon lucide-send">
                        <path
                            d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" />
                        <path d="m21.854 2.147-10.94 10.939" />
                    </svg>
                    Submit Inquiries
                </a>
            </li>
            <li>
                <a href="{{ url('/student/monitoring-process') }}" class="w-full flex items-center px-2 py-3 border-none no-underline gap-x-3 hover:text-secondary transition-all duration-300 
                    {{ Request::is('student/monitoring-process') ? 'text-secondary' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-monitor-cloud-icon lucide-monitor-cloud">
                        <path d="M11 13a3 3 0 1 1 2.83-4H14a2 2 0 0 1 0 4z" />
                        <path d="M12 17v4" />
                        <path d="M8 21h8" />
                        <rect x="2" y="3" width="20" height="14" rx="2" />
                    </svg>
                    Process Monitoring
                </a>
            </li>
            <li>
                <button type="button" onclick="openFaqModal()"
                    class="w-full flex items-center px-2 py-3 border-none no-underline gap-x-3 hover:text-secondary transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-circle-question-mark-icon lucide-circle-question-mark">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                        <path d="M12 17h.01" />
                    </svg>
                    FAQ
                </button>
            </li>
        </ul>
    </div>
    <footer class="flex items-center px-3 py-3 border-darkergray border-t">
        <div class="flex items-center">
            <img src="{{ asset('images/profile-white.png') }}" alt="PFP" class="w-[45px] h-[45px] rounded-[50%] mx-1">
            <div>
                <div class="whitespace-nowrap">
                    {{ Auth::user()->user_Fname }} {{ Auth::user()->user_MI }} {{ Auth::user()->user_Lname }}
                </div>
                <div class="whitespace-nowrap text-sm">Student</div>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="duration-200 hover:text-secondary p-0 m-0 bg-transparent border-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-log-out-icon lucide-log-out text-2xl absolute right-4 bottom-[10px] -translate-y-[50%]">
                        <path d="m16 17 5-5-5-5" />
                        <path d="M21 12H9" />
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                    </svg>
                </button>
            </form>
        </div>
    </footer>
</nav>

<div id="sidebar"
    class="fixed top-0 left-0 h-full w-[310px] bg-primary xl:hidden shadow transform -translate-x-full transition-transform duration-300 z-[999]">
    <nav
        class="text-white fixed top-0 left-0 w-[310px] bg-primary h-[100dvh] z-[999] flex flex-col overflow-hidden border-darkergray border-r">
        <header
            class="flex justify-center items-center p-2 overflow-hidden border-darkergray border-b h-[90px] max-sm:h-[80px]">
            <img src="{{ asset('images/mcu-logo-white.png') }}" alt="STUDENT MAS BAGO"
                class="w-[160px] h-[55px] max-sm:w-[140px] max-sm:h-[50px]">
        </header>
        <div class="overflow-auto overscroll-contain flex-1">
            <ul class="m-2 p-0 bg-primary">
                <li>
                    <a href="{{ url('/student/dashboard') }}" class="flex items-center max-sm:text-[15px] px-2 py-3 max-sm:py-2.5 border-0 no-underline gap-x-2 cursor-pointer transition-all duration-300 hover:text-secondary 
                        {{ Request::is('student/dashboard') ? 'text-secondary' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-layout-dashboard-icon lucide-layout-dashboard">
                            <rect width="7" height="9" x="3" y="3" rx="1" />
                            <rect width="7" height="5" x="14" y="3" rx="1" />
                            <rect width="7" height="9" x="14" y="12" rx="1" />
                            <rect width="7" height="5" x="3" y="16" rx="1" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ url('/student/submit-forms') }}"
                        class="flex items-center max-sm:text-[15px] px-2 py-3 max-sm:py-2.5 border-0 no-underline gap-x-2 cursor-pointer transition-all duration-300 hover:text-secondary 
                        {{ Request::is('student/submit-forms') || Request::is('student/forms/*') ? 'text-secondary' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-mail-icon lucide-mail">
                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                            <rect x="2" y="4" width="20" height="16" rx="2" />
                        </svg>
                        Submit Forms
                    </a>
                </li>
                <li>
                    <a href="{{ url('/student/submit-documents') }}" class="flex items-center max-sm:text-[15px] px-2 py-3 max-sm:py-2.5 border-0 no-underline gap-x-2 cursor-pointer transition-all duration-300 hover:text-secondary 
                        {{ Request::is('student/submit-documents') ? 'text-secondary' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-paperclip-icon lucide-paperclip">
                            <path
                                d="m16 6-8.414 8.586a2 2 0 0 0 2.829 2.829l8.414-8.586a4 4 0 1 0-5.657-5.657l-8.379 8.551a6 6 0 1 0 8.485 8.485l8.379-8.551" />
                        </svg>
                        Submit Documents
                    </a>
                </li>
                <li>
                    <a href="{{ url('/student/submit-inquiries') }}" class="flex items-center max-sm:text-[15px] px-2 py-3 max-sm:py-2.5 border-0 no-underline gap-x-2 cursor-pointer transition-all duration-300 hover:text-secondary 
                        {{ Request::is('student/submit-inquiries') ? 'text-secondary' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-send-icon lucide-send">
                            <path
                                d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" />
                            <path d="m21.854 2.147-10.94 10.939" />
                        </svg>
                        Submit Inquiries
                    </a>
                </li>
                <li>
                    <a href="{{ url('/student/monitoring-process') }}" class="flex items-center max-sm:text-[15px] px-2 py-3 max-sm:py-2.5 border-0 no-underline gap-x-2 cursor-pointer transition-all duration-300 hover:text-secondary 
                        {{ Request::is('student/monitoring-process') ? 'text-secondary' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-monitor-cloud-icon lucide-monitor-cloud">
                            <path d="M11 13a3 3 0 1 1 2.83-4H14a2 2 0 0 1 0 4z" />
                            <path d="M12 17v4" />
                            <path d="M8 21h8" />
                            <rect x="2" y="3" width="20" height="14" rx="2" />
                        </svg>
                        Process Monitoring
                    </a>
                </li>
                <li>
                    <button type="button" onclick="openFaqModal()"
                        class="w-full flex items-center max-sm:text-[15px] px-2 py-3 border-none no-underline gap-x-2 hover:text-secondary transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-question-mark-icon lucide-circle-question-mark">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <path d="M12 17h.01" />
                        </svg>
                        FAQ
                    </button>
                </li>
                <li>
                    <a href="{{ url('/student/settings') }}" class="flex items-center max-sm:text-[15px] px-2 py-3 max-sm:py-2.5 border-0 no-underline gap-x-2 cursor-pointer transition-all duration-300 hover:text-secondary 
                        {{ Request::is('student/settings') ? 'text-secondary' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-settings-icon lucide-settings">
                            <path
                                d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                        Settings
                    </a>
                </li>
            </ul>
        </div>
        <footer class="flex items-center px-3 py-3 border-darkergray border-t">
            <div class="flex items-center">
                <img src="{{ asset('images/profile-white.png') }}" alt="PFP"
                    class="w-[40px] h-[40px] rounded-[50%] mx-0.5">
                <div class="pl-1">
                    <div class="whitespace-nowrap max-sm:text-sm">
                        {{ Auth::user()->user_Fname }} {{ Auth::user()->user_MI }} {{ Auth::user()->user_Lname }}
                    </div>
                    <div class="whitespace-nowrap max-sm:text-xs text-sm">Student</div>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="duration-200 hover:text-secondary p-0 m-0 bg-transparent border-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-log-out-icon lucide-log-out text-2xl absolute right-4 bottom-[10px] -translate-y-[50%]">
                            <path d="m16 17 5-5-5-5" />
                            <path d="M21 12H9" />
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                        </svg>
                    </button>
                </form>
            </div>
        </footer>
    </nav>
</div>
<header
    class="h-[65px] xl:hidden bg-primary z-[99] shadow-md sticky top-0 left-0 flex items-center px-3 justify-between">
    <button id="menuBtn" class="text-white focus:outline-none text-xl pl-3">&#9776;</button>
    <img src="{{ asset('images/mcu-logo-white(2).png') }}" alt="" class="w-[55px] h-[55px]">
    <img src="{{ asset('images/profile-white.png') }}" alt="" class="rounded-[50%] w-[35px] h-[35px] border-none">
</header>

<script>
    const modal = document.getElementById('faqModal');
    const modalBox = document.getElementById('modalBox');
    const button = document.getElementById('faqButton');

    function closeAllDetails() {
        document.querySelectorAll('#faqModal details[open]').forEach(d => {
            d.removeAttribute('open');
        });
    }

    function openFaqModal() {
        closeAllDetails()

        modal.classList.remove('hidden');
        modal.classList.add('flex');

        requestAnimationFrame(() => {
            modal.classList.remove('opacity-0');
            modal.classList.add('opacity-100');
        });

        button.classList.add('hidden');
    }

    function closeFaqModal() {
        modal.classList.add('opacity-0');
        modal.classList.remove('opacity-100');

        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 300);

        button.classList.remove('hidden');
    }

    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeFaqModal();
    });
</script>