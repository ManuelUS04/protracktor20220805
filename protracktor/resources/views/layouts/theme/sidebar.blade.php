<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a class="d-flex justify-content-center" href="/">
            <img alt="Logo" src="/images/logo.png" class="logo h-40px" />
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="w-auto px-0 btn btn-icon btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.821 6.5L5.819 7.374C5.91284 7.46283 5.96865 7.58455 5.97472 7.71362C5.98079 7.8427 5.93665 7.96912 5.85156 8.06637C5.76647 8.16361 5.64703 8.22414 5.51829 8.23526C5.38955 8.24638 5.2615 8.20722 5.161 8.126L3.161 6.376C3.10746 6.32907 3.06456 6.27125 3.03517 6.20641C3.00578 6.14156 2.99058 6.07119 2.99058 6C2.99058 5.92881 3.00578 5.85844 3.03517 5.79359C3.06456 5.72875 3.10746 5.67093 3.161 5.624L5.161 3.874C5.2615 3.79278 5.38955 3.75362 5.51829 3.76474C5.64703 3.77586 5.76647 3.83639 5.85156 3.93363C5.93665 4.03088 5.98079 4.1573 5.97472 4.28638C5.96865 4.41545 5.91284 4.53717 5.819 4.626L4.821 5.5H8.5C8.63261 5.5 8.75979 5.55268 8.85355 5.64645C8.94732 5.74021 9 5.86739 9 6C9 6.13261 8.94732 6.25979 8.85355 6.35355C8.75979 6.44732 8.63261 6.5 8.5 6.5H4.821ZM16 10C16 10.5304 15.7893 11.0391 15.4142 11.4142C15.0391 11.7893 14.5304 12 14 12H2C1.46957 12 0.960859 11.7893 0.585786 11.4142C0.210714 11.0391 0 10.5304 0 10V2C0 1.46957 0.210714 0.960859 0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H14C14.5304 0 15.0391 0.210714 15.4142 0.585786C15.7893 0.960859 16 1.46957 16 2V10ZM14 11C14.2652 11 14.5196 10.8946 14.7071 10.7071C14.8946 10.5196 15 10.2652 15 10V2C15 1.73478 14.8946 1.48043 14.7071 1.29289C14.5196 1.10536 14.2652 1 14 1H11V11H14ZM10 11V1H2C1.73478 1 1.48043 1.10536 1.29289 1.29289C1.10536 1.48043 1 1.73478 1 2V10C1 10.2652 1.10536 10.5196 1.29289 10.7071C1.48043 10.8946 1.73478 11 2 11H10Z" fill="white" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <div class="menu-item">
        <div class="p-0 menu-content">
            <div class="mx-1 mb-4 opacity-25 separator"></div>
        </div>
    </div>
    <div class="px-3 menu-item">
        <div class="px-3 menu-content d-flex align-items-start">
            <div>
                <div class="symbol symbol-50px me-5">
                    @if (auth()->user()->profilePhotoSrc)
                    <img width="150px" height="150px" src="{{ auth()->user()->profilePhotoSrc }}">
                    @else
                    <img alt="Logo" src="/assets/media/avatars/blank.png" />
                    @endif
                </div>
            </div>
            <div class="text-white flex-fill">
                <div class="fw-bolder fs-6">{{ auth()->user()->full_name }}</div>
                <div class="opacity-80 fs-7">{{ auth()->user()->roles[0]->name }}</div>
                <div class="opacity-80 fs-7">
                    <i class="bi bi-circle-fill fs-9 text-success"></i>
                    <span class="text-success">online</span>
                </div>
            </div>
            <div>
                <div class="dropdown">
                    <a type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="text-white bi bi-gear fs-5"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                        <li>
                            <form id="signOutForm" action="{{route('logout')}}" method="POST">
                                @csrf
                                @method('POST')
                                <a style="cursor:pointer;" onclick="document.getElementById('signOutForm').submit();" class="dropdown-item">Sign Out</a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="p-0 menu-content">
            <div class="mx-1 my-4 opacity-25 separator"></div>
        </div>
    </div>
    <div class="menu-item">
        <div class="menu-content">
            <form data-kt-search-element="form" class="mb-5 d-none d-lg-block w-100 mb-lg-0 position-relative" autocomplete="off">
                <!--begin::Hidden input(Added to disable form autocomplete)-->
                <input type="hidden">
                <!--end::Hidden input-->
                <!--begin::Icon-->
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <!--end::Icon-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid h-40px bg-body ps-13 fs-7" name="search" value="" placeholder="Quick Search" data-kt-search-element="input">
                <!--end::Input-->
                <!--begin::Spinner-->
                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                    <span class="text-gray-400 align-middle spinner-border h-15px w-15px"></span>
                </span>
                <!--end::Spinner-->
                <!--begin::Reset-->
                <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2 me-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span>
                <!--end::Reset-->
            </form>
        </div>
    </div>
    <div class="menu-item">
        <div class="p-0 menu-content">
            <div class="mx-1 my-4 opacity-25 separator"></div>
        </div>
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="my-5 overflow-auto my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div class="px-4 menu menu-column menu-title-white menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item">
                    <a class="menu-link rounded-2 rounded-2 {{ Route::currentRouteName() === 'dashboard' ? 'active' : '' }}" href="{{route('dashboard')}}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com009.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.888889 8.88889H6.22222C6.45797 8.88889 6.68406 8.79524 6.85076 8.62854C7.01746 8.46184 7.11111 8.23575 7.11111 8V0.888889C7.11111 0.653141 7.01746 0.427048 6.85076 0.260349C6.68406 0.0936505 6.45797 0 6.22222 0H0.888889C0.653141 0 0.427048 0.0936505 0.260349 0.260349C0.0936505 0.427048 0 0.653141 0 0.888889V8C0 8.23575 0.0936505 8.46184 0.260349 8.62854C0.427048 8.79524 0.653141 8.88889 0.888889 8.88889ZM0 15.1111C0 15.3469 0.0936505 15.573 0.260349 15.7397C0.427048 15.9064 0.653141 16 0.888889 16H6.22222C6.45797 16 6.68406 15.9064 6.85076 15.7397C7.01746 15.573 7.11111 15.3469 7.11111 15.1111V11.5556C7.11111 11.3198 7.01746 11.0937 6.85076 10.927C6.68406 10.7603 6.45797 10.6667 6.22222 10.6667H0.888889C0.653141 10.6667 0.427048 10.7603 0.260349 10.927C0.0936505 11.0937 0 11.3198 0 11.5556V15.1111ZM8.88889 15.1111C8.88889 15.3469 8.98254 15.573 9.14924 15.7397C9.31594 15.9064 9.54203 16 9.77778 16H15.1111C15.3469 16 15.573 15.9064 15.7397 15.7397C15.9064 15.573 16 15.3469 16 15.1111V8.88889C16 8.65314 15.9064 8.42705 15.7397 8.26035C15.573 8.09365 15.3469 8 15.1111 8H9.77778C9.54203 8 9.31594 8.09365 9.14924 8.26035C8.98254 8.42705 8.88889 8.65314 8.88889 8.88889V15.1111ZM9.77778 6.22222H15.1111C15.3469 6.22222 15.573 6.12857 15.7397 5.96187C15.9064 5.79517 16 5.56908 16 5.33333V0.888889C16 0.653141 15.9064 0.427048 15.7397 0.260349C15.573 0.0936505 15.3469 0 15.1111 0H9.77778C9.54203 0 9.31594 0.0936505 9.14924 0.260349C8.98254 0.427048 8.88889 0.653141 8.88889 0.888889V5.33333C8.88889 5.56908 8.98254 5.79517 9.14924 5.96187C9.31594 6.12857 9.54203 6.22222 9.77778 6.22222Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">DASHBOARD</span>
                    </a>
                </div>
                <div class="menu-item">
                    <div class="pt-8 pb-0 menu-content">
                        <span class="menu-section text-uppercase fs-8 ls-1">SECTIONS</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link rounded-2 {{ Route::currentRouteName() === 'communication.timeline.index' ? 'active' : '' }}" href="{{route('communication.timeline.index')}}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com009.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.8572 2.85714H6.7597L8.80865 0.808L8.00073 0L4.57247 3.42857L8.00073 6.85714L8.80865 6.04914L6.7597 4H14.8572V10.2857H5.65751C5.54452 9.73725 5.27329 9.23392 4.87735 8.83795C4.48142 8.44198 3.97813 8.17072 3.42972 8.05771V0H2.28696V8.05771C1.64145 8.18914 1.06119 8.53963 0.644422 9.04984C0.227656 9.56004 0 10.1986 0 10.8574C0 11.5162 0.227656 12.1548 0.644422 12.665C1.06119 13.1752 1.64145 13.5257 2.28696 13.6571V16H3.42972V13.6566C3.97813 13.5436 4.48142 13.2723 4.87735 12.8763C5.27329 12.4804 5.54452 11.977 5.65751 11.4286H14.8572C15.1602 11.4283 15.4507 11.3078 15.665 11.0935C15.8792 10.8792 15.9997 10.5887 16 10.2857V4C15.9997 3.69699 15.8792 3.40647 15.665 3.19221C15.4507 2.97795 15.1602 2.85745 14.8572 2.85714ZM2.85834 12.5714C2.51932 12.5714 2.18791 12.4709 1.90602 12.2825C1.62413 12.0942 1.40443 11.8264 1.27469 11.5132C1.14495 11.1999 1.11101 10.8552 1.17715 10.5227C1.24329 10.1902 1.40654 9.88471 1.64627 9.64496C1.88599 9.40521 2.19142 9.24194 2.52393 9.1758C2.85644 9.10965 3.20109 9.1436 3.51431 9.27335C3.82753 9.4031 4.09524 9.62282 4.28359 9.90474C4.47194 10.1867 4.57247 10.5181 4.57247 10.8571C4.57202 11.3117 4.39128 11.7474 4.06991 12.0688C3.74855 12.3902 3.31282 12.571 2.85834 12.5714Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Communications</span>
                        <span class="menu-arrow"></span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ preg_match('/^order/', Route::currentRouteName()) ? 'show hover' : '' }}" >
                    <span class="menu-link rounded-2">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 14.4C4.48 14.4 1.6 11.52 1.6 8C1.6 4.48 4.48 1.6 8 1.6C11.52 1.6 14.4 4.48 14.4 8C14.4 11.52 11.52 14.4 8 14.4ZM8 0C3.6 0 0 3.6 0 8C0 12.4 3.6 16 8 16C12.4 16 16 12.4 16 8C16 3.6 12.4 0 8 0ZM7.2 9.6H8.8V12H11.2V8H12.8L8 4L3.2 8H4.8V12H7.2V9.6Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Orders</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion" style="display: none; overflow: hidden;">
                        <div class="menu-item">
                            <a class="menu-link rounded-2 {{ Route::currentRouteName() === 'order.index' ? 'active' : '' }}" href="{{route('order.index')}}">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/ecommerce/ecm009.svg-->
                                    <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z" fill="currentColor" />
                                            <path d="M7 16H6C5.4 16 5 15.6 5 15V13H8V15C8 15.6 7.6 16 7 16Z" fill="currentColor" />
                                            <path opacity="0.3" d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z" fill="currentColor" />
                                            <path d="M18 16H17C16.4 16 16 15.6 16 15V13H19V15C19 15.6 18.6 16 18 16Z" fill="currentColor" />
                                            <path opacity="0.3" d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z" fill="currentColor" />
                                            <path d="M7 5H6C5.4 5 5 4.6 5 4V2H8V4C8 4.6 7.6 5 7 5Z" fill="currentColor" />
                                            <path opacity="0.3" d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z" fill="currentColor" />
                                            <path d="M18 5H17C16.4 5 16 4.6 16 4V2H19V4C19 4.6 18.6 5 18 5Z" fill="currentColor" />
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Order List</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link rounded-2 {{ Route::currentRouteName() === 'document' ? 'active' : '' }}" href="{{route('document')}}">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil003.svg-->
                                    <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="currentColor" />
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Documents</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link rounded-2">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4737 0.842105C12.0808 0.842105 10.9474 1.97558 10.9474 3.36842C10.9474 3.79116 11.0619 4.18358 11.2455 4.53474L10.3057 5.63116C9.74977 5.25355 9.09309 5.05197 8.42105 5.05263C7.79874 5.05263 7.22105 5.23453 6.72 5.52926L5.52926 4.33853C5.7658 3.91278 5.89148 3.4344 5.89474 2.94737C5.89474 1.32211 4.57263 0 2.94737 0C1.32211 0 0 1.32211 0 2.94737C0 4.57263 1.32211 5.89474 2.94737 5.89474C3.45347 5.89474 3.92253 5.75495 4.33853 5.52926L5.52926 6.72C5.22082 7.23406 5.0562 7.82157 5.05263 8.42105C5.05263 9.26063 5.37263 10.0202 5.8821 10.6114L4.45726 12.0362L4.47832 12.0573C4.13403 11.8834 3.75411 11.7917 3.36842 11.7895C1.97558 11.7895 0.842105 12.9229 0.842105 14.3158C0.842105 15.7086 1.97558 16.8421 3.36842 16.8421C4.76126 16.8421 5.89474 15.7086 5.89474 14.3158C5.89474 13.9149 5.79284 13.5419 5.62695 13.2059L5.648 13.2269L7.29347 11.5815C7.648 11.7078 8.02358 11.7895 8.42105 11.7895C10.2787 11.7895 11.7895 10.2787 11.7895 8.42105C11.7859 7.89794 11.6592 7.38302 11.4198 6.91789L12.4749 5.68674C12.7815 5.81979 13.1183 5.89474 13.4737 5.89474C14.8665 5.89474 16 4.76126 16 3.36842C16 1.97558 14.8665 0.842105 13.4737 0.842105ZM3.36842 15.1579C3.14508 15.1579 2.93089 15.0692 2.77296 14.9112C2.61504 14.7533 2.52632 14.5391 2.52632 14.3158C2.52632 14.0924 2.61504 13.8783 2.77296 13.7203C2.93089 13.5624 3.14508 13.4737 3.36842 13.4737C3.59176 13.4737 3.80595 13.5624 3.96388 13.7203C4.1218 13.8783 4.21053 14.0924 4.21053 14.3158C4.21053 14.5391 4.1218 14.7533 3.96388 14.9112C3.80595 15.0692 3.59176 15.1579 3.36842 15.1579ZM1.68421 2.94737C1.68421 2.25095 2.25095 1.68421 2.94737 1.68421C3.64379 1.68421 4.21053 2.25095 4.21053 2.94737C4.21053 3.64379 3.64379 4.21053 2.94737 4.21053C2.25095 4.21053 1.68421 3.64379 1.68421 2.94737ZM8.42105 10.1053C7.49221 10.1053 6.73684 9.34989 6.73684 8.42105C6.73684 7.49221 7.49221 6.73684 8.42105 6.73684C9.34989 6.73684 10.1053 7.49221 10.1053 8.42105C10.1053 9.34989 9.34989 10.1053 8.42105 10.1053ZM13.4737 4.21053C13.2503 4.21053 13.0362 4.1218 12.8782 3.96388C12.7203 3.80595 12.6316 3.59176 12.6316 3.36842C12.6316 3.14508 12.7203 2.93089 12.8782 2.77296C13.0362 2.61504 13.2503 2.52632 13.4737 2.52632C13.697 2.52632 13.9112 2.61504 14.0691 2.77296C14.2271 2.93089 14.3158 3.14508 14.3158 3.36842C14.3158 3.59176 14.2271 3.80595 14.0691 3.96388C13.9112 4.1218 13.697 4.21053 13.4737 4.21053Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Automation</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion" style="display: none; overflow: hidden;">
                        <div class="menu-item">
                            <a class="menu-link rounded-2" href="#">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/electronics/elc001.svg-->
                                    <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M20 19H4C2.9 19 2 18.1 2 17H22C22 18.1 21.1 19 20 19Z" fill="currentColor" />
                                            <path opacity="0.3" d="M20 5H4C3.4 5 3 5.4 3 6V17H21V6C21 5.4 20.6 5 20 5Z" fill="currentColor" />
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Automation</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link rounded-2 {{ Route::currentRouteName() === 'userAll' ? 'active' : '' }}" href="{{route('userAll')}}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 8C9.06087 8 10.0783 7.57857 10.8284 6.82843C11.5786 6.07828 12 5.06087 12 4C12 2.93913 11.5786 1.92172 10.8284 1.17157C10.0783 0.421427 9.06087 0 8 0C6.93913 0 5.92172 0.421427 5.17157 1.17157C4.42143 1.92172 4 2.93913 4 4C4 5.06087 4.42143 6.07828 5.17157 6.82843C5.92172 7.57857 6.93913 8 8 8ZM10.6667 4C10.6667 4.70724 10.3857 5.38552 9.88562 5.88562C9.38552 6.38572 8.70724 6.66667 8 6.66667C7.29276 6.66667 6.61448 6.38572 6.11438 5.88562C5.61428 5.38552 5.33333 4.70724 5.33333 4C5.33333 3.29276 5.61428 2.61448 6.11438 2.11438C6.61448 1.61428 7.29276 1.33333 8 1.33333C8.70724 1.33333 9.38552 1.61428 9.88562 2.11438C10.3857 2.61448 10.6667 3.29276 10.6667 4ZM16 14.6667C16 16 14.6667 16 14.6667 16H1.33333C1.33333 16 0 16 0 14.6667C0 13.3333 1.33333 9.33333 8 9.33333C14.6667 9.33333 16 13.3333 16 14.6667ZM14.6667 14.6613C14.6653 14.3333 14.4613 13.3467 13.5573 12.4427C12.688 11.5733 11.052 10.6667 8 10.6667C4.94667 10.6667 3.312 11.5733 2.44267 12.4427C1.53867 13.3467 1.336 14.3333 1.33333 14.6613H14.6667Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">User Management</span>
                        <span class="menu-arrow"></span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link rounded-2">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.8333 13.2145H1.5V0.167273C1.5 0.0752727 1.425 0 1.33333 0H0.166667C0.075 0 0 0.0752727 0 0.167273V14.5527C0 14.6447 0.075 14.72 0.166667 14.72H15.8333C15.925 14.72 16 14.6447 16 14.5527V13.3818C16 13.2898 15.925 13.2145 15.8333 13.2145ZM3.33333 11.5418H4.5C4.59167 11.5418 4.66667 11.4665 4.66667 11.3745V8.36364C4.66667 8.27164 4.59167 8.19636 4.5 8.19636H3.33333C3.24167 8.19636 3.16667 8.27164 3.16667 8.36364V11.3745C3.16667 11.4665 3.24167 11.5418 3.33333 11.5418ZM6.5 11.5418H7.66667C7.75833 11.5418 7.83333 11.4665 7.83333 11.3745V4.68364C7.83333 4.59164 7.75833 4.51636 7.66667 4.51636H6.5C6.40833 4.51636 6.33333 4.59164 6.33333 4.68364V11.3745C6.33333 11.4665 6.40833 11.5418 6.5 11.5418ZM9.66667 11.5418H10.8333C10.925 11.5418 11 11.4665 11 11.3745V6.31455C11 6.22255 10.925 6.14727 10.8333 6.14727H9.66667C9.575 6.14727 9.5 6.22255 9.5 6.31455V11.3745C9.5 11.4665 9.575 11.5418 9.66667 11.5418ZM12.8333 11.5418H14C14.0917 11.5418 14.1667 11.4665 14.1667 11.3745V3.01091C14.1667 2.91891 14.0917 2.84364 14 2.84364H12.8333C12.7417 2.84364 12.6667 2.91891 12.6667 3.01091V11.3745C12.6667 11.4665 12.7417 11.5418 12.8333 11.5418Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Reports</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion" style="display: none; overflow: hidden;">
                        <div class="menu-item">
                            <a class="menu-link rounded-2" href="../../demo1/dist/dashboards/projects.html">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/graphs/gra001.svg-->
                                    <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="currentColor" />
                                            <path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="currentColor" />
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Report of Orders</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link rounded-2" href="../../demo1/dist/dashboards/projects.html">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/graphs/gra010.svg-->
                                    <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M13.0021 10.9128V3.01281C13.0021 2.41281 13.5021 1.91281 14.1021 2.01281C16.1021 2.21281 17.9021 3.11284 19.3021 4.61284C20.7021 6.01284 21.6021 7.91285 21.9021 9.81285C22.0021 10.4129 21.5021 10.9128 20.9021 10.9128H13.0021Z" fill="currentColor" />
                                            <path opacity="0.3" d="M11.0021 13.7128V4.91283C11.0021 4.31283 10.5021 3.81283 9.90208 3.91283C5.40208 4.51283 1.90209 8.41284 2.00209 13.1128C2.10209 18.0128 6.40208 22.0128 11.3021 21.9128C13.1021 21.8128 14.7021 21.3128 16.0021 20.4128C16.5021 20.1128 16.6021 19.3128 16.1021 18.9128L11.0021 13.7128Z" fill="currentColor" />
                                            <path opacity="0.3" d="M21.9021 14.0128C21.7021 15.6128 21.1021 17.1128 20.1021 18.4128C19.7021 18.9128 19.0021 18.9128 18.6021 18.5128L13.0021 12.9128H20.9021C21.5021 12.9128 22.0021 13.4128 21.9021 14.0128Z" fill="currentColor" />
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Report of Users</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link rounded-2">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.75 4.5C2.94891 4.5 3.13968 4.42098 3.28033 4.28033C3.42098 4.13968 3.5 3.94891 3.5 3.75C3.5 3.55109 3.42098 3.36032 3.28033 3.21967C3.13968 3.07902 2.94891 3 2.75 3C2.55109 3 2.36032 3.07902 2.21967 3.21967C2.07902 3.36032 2 3.55109 2 3.75C2 3.94891 2.07902 4.13968 2.21967 4.28033C2.36032 4.42098 2.55109 4.5 2.75 4.5ZM3.5 6.75C3.5 6.94891 3.42098 7.13968 3.28033 7.28033C3.13968 7.42098 2.94891 7.5 2.75 7.5C2.55109 7.5 2.36032 7.42098 2.21967 7.28033C2.07902 7.13968 2 6.94891 2 6.75C2 6.55109 2.07902 6.36032 2.21967 6.21967C2.36032 6.07902 2.55109 6 2.75 6C2.94891 6 3.13968 6.07902 3.28033 6.21967C3.42098 6.36032 3.5 6.55109 3.5 6.75ZM2.75 10.5C2.84849 10.5 2.94602 10.4806 3.03701 10.4429C3.12801 10.4052 3.21069 10.35 3.28033 10.2803C3.34997 10.2107 3.40522 10.128 3.44291 10.037C3.4806 9.94602 3.5 9.84849 3.5 9.75C3.5 9.65151 3.4806 9.55398 3.44291 9.46299C3.40522 9.37199 3.34997 9.28931 3.28033 9.21967C3.21069 9.15003 3.12801 9.09478 3.03701 9.05709C2.94602 9.0194 2.84849 9 2.75 9C2.55109 9 2.36032 9.07902 2.21967 9.21967C2.07902 9.36032 2 9.55109 2 9.75C2 9.94891 2.07902 10.1397 2.21967 10.2803C2.36032 10.421 2.55109 10.5 2.75 10.5ZM6.5 3.75C6.5 3.94891 6.42098 4.13968 6.28033 4.28033C6.13968 4.42098 5.94891 4.5 5.75 4.5C5.55109 4.5 5.36032 4.42098 5.21967 4.28033C5.07902 4.13968 5 3.94891 5 3.75C5 3.55109 5.07902 3.36032 5.21967 3.21967C5.36032 3.07902 5.55109 3 5.75 3C5.94891 3 6.13968 3.07902 6.28033 3.21967C6.42098 3.36032 6.5 3.55109 6.5 3.75ZM5.75 7.5C5.94891 7.5 6.13968 7.42098 6.28033 7.28033C6.42098 7.13968 6.5 6.94891 6.5 6.75C6.5 6.55109 6.42098 6.36032 6.28033 6.21967C6.13968 6.07902 5.94891 6 5.75 6C5.55109 6 5.36032 6.07902 5.21967 6.21967C5.07902 6.36032 5 6.55109 5 6.75C5 6.94891 5.07902 7.13968 5.21967 7.28033C5.36032 7.42098 5.55109 7.5 5.75 7.5ZM6.5 9.75C6.5 9.94891 6.42098 10.1397 6.28033 10.2803C6.13968 10.421 5.94891 10.5 5.75 10.5C5.55109 10.5 5.36032 10.421 5.21967 10.2803C5.07902 10.1397 5 9.94891 5 9.75C5 9.55109 5.07902 9.36032 5.21967 9.21967C5.36032 9.07902 5.55109 9 5.75 9C5.94891 9 6.13968 9.07902 6.28033 9.21967C6.42098 9.36032 6.5 9.55109 6.5 9.75ZM8.75 10.5C8.84849 10.5 8.94602 10.4806 9.03701 10.4429C9.12801 10.4052 9.21069 10.35 9.28033 10.2803C9.34997 10.2107 9.40522 10.128 9.44291 10.037C9.4806 9.94602 9.5 9.84849 9.5 9.75C9.5 9.65151 9.4806 9.55398 9.44291 9.46299C9.40522 9.37199 9.34997 9.28931 9.28033 9.21967C9.21069 9.15003 9.12801 9.09478 9.03701 9.05709C8.94602 9.0194 8.84849 9 8.75 9C8.55109 9 8.36032 9.07902 8.21967 9.21967C8.07902 9.36032 8 9.55109 8 9.75C8 9.94891 8.07902 10.1397 8.21967 10.2803C8.36032 10.421 8.55109 10.5 8.75 10.5ZM0.5 16C0.367392 16 0.240215 15.9473 0.146447 15.8536C0.0526785 15.7598 0 15.6326 0 15.5V1.5C0 1.10218 0.158035 0.720644 0.43934 0.43934C0.720644 0.158035 1.10218 0 1.5 0H7.5C7.89782 0 8.27936 0.158035 8.56066 0.43934C8.84196 0.720644 9 1.10218 9 1.5V6H10.5C10.8978 6 11.2794 6.15804 11.5607 6.43934C11.842 6.72064 12 7.10218 12 7.5V15.5C12 15.6326 11.9473 15.7598 11.8536 15.8536C11.7598 15.9473 11.6326 16 11.5 16H0.5ZM1 1.5V15H3V12.5C3 12.3674 3.05268 12.2402 3.14645 12.1464C3.24021 12.0527 3.36739 12 3.5 12H8.5C8.63261 12 8.75979 12.0527 8.85355 12.1464C8.94732 12.2402 9 12.3674 9 12.5V15H11V7.5C11 7.36739 10.9473 7.24021 10.8536 7.14645C10.7598 7.05268 10.6326 7 10.5 7H8.5C8.36739 7 8.24021 6.94732 8.14645 6.85355C8.05268 6.75979 8 6.63261 8 6.5V1.5C8 1.36739 7.94732 1.24021 7.85355 1.14645C7.75979 1.05268 7.63261 1 7.5 1H1.5C1.36739 1 1.24021 1.05268 1.14645 1.14645C1.05268 1.24021 1 1.36739 1 1.5ZM8 13H6.5V15H8V13ZM5.5 13H4V15H5.5V13Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Offices</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion" style="display: none; overflow: hidden;">
                        <div class="menu-item">
                            <a class="menu-link rounded-2 {{ Route::currentRouteName() === 'allOffice' ? 'active' : '' }}" href="{{route('allOffice')}}">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/finance/fin006.svg-->
                                    <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                                            <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Office List</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link rounded-2 {{ Route::currentRouteName() === 'editBlaineOffice' ? 'active' : '' }}" href="{{route('editBlaineOffice')}}">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Office</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link rounded-2 {{ Route::currentRouteName() === 'settings' ? 'active' : '' }}" href="{{route('settings')}}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: assets/media/icons/duotune/coding/cod009.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.9607 11.539C2.05417 11.5613 2.18109 11.6766 2.21774 11.7817L2.40361 12.2299C2.44557 12.316 2.4376 12.4864 2.38768 12.5682L1.64578 13.7812C1.48699 14.0414 1.51992 14.41 1.7334 14.649L2.36166 15.2767C2.58046 15.471 2.96654 15.5061 3.21827 15.3537L4.43123 14.6118C4.50717 14.565 4.67021 14.5486 4.78439 14.6022L5.23208 14.787C5.32236 14.8184 5.4376 14.9448 5.45991 15.0382L5.79288 16.4211C5.86352 16.7143 6.14339 16.9554 6.44397 16.983C6.44397 16.983 6.62825 17 6.90441 17C7.18056 17 7.36484 16.983 7.36538 16.983C7.51753 16.965 7.66083 16.9019 7.77678 16.8018C7.89274 16.7016 7.97603 16.5691 8.01593 16.4211L8.34944 15.0382C8.37175 14.9453 8.48646 14.8184 8.59161 14.7817L9.03983 14.5958C9.11896 14.5571 9.30218 14.565 9.37812 14.6118L10.5911 15.3537C10.6978 15.419 10.8253 15.4535 10.9607 15.4535C11.1439 15.4535 11.3213 15.3893 11.4588 15.2666L12.0866 14.6383C12.1861 14.5209 12.2469 14.3755 12.2607 14.2222C12.2745 14.0689 12.2405 13.915 12.1636 13.7817L11.4217 12.5688C11.3717 12.487 11.3638 12.3165 11.4121 12.2156L11.5969 11.7679C11.6283 11.6776 11.7546 11.5624 11.8481 11.5401L13.231 11.2071C13.3789 11.167 13.5115 11.0836 13.6116 10.9676C13.7118 10.8516 13.7749 10.7082 13.7929 10.556C13.7929 10.556 13.8099 10.3717 13.8099 10.0956C13.8099 9.81943 13.7929 9.63515 13.7929 9.63462C13.7748 9.48244 13.7117 9.33913 13.6116 9.22311C13.5114 9.10709 13.3789 9.02366 13.231 8.98353L11.8486 8.65108C11.7552 8.62877 11.6283 8.51353 11.5916 8.40838L11.4057 7.96016C11.3638 7.87413 11.3717 7.70365 11.4217 7.62187L12.1636 6.40891C12.3224 6.14869 12.2894 5.78013 12.0759 5.54115L11.4477 4.91343C11.2284 4.71852 10.8417 4.68347 10.5911 4.83642L9.37812 5.57832C9.30218 5.62453 9.13861 5.64205 9.02496 5.58788L8.57727 5.40307C8.48699 5.37174 8.37228 5.24534 8.34997 5.15188L8.01646 3.76898C7.9764 3.62104 7.89298 3.48848 7.77695 3.38835C7.66092 3.28822 7.51758 3.2251 7.36538 3.20711C7.36431 3.20764 7.18003 3.19064 6.90388 3.19064C6.62772 3.19064 6.44344 3.20764 6.44291 3.20764C6.29073 3.2257 6.14743 3.28884 6.03141 3.38896C5.91539 3.48908 5.83195 3.62161 5.79182 3.76951L5.45937 5.15134C5.43707 5.24481 5.32183 5.37174 5.21668 5.40838L4.76846 5.59425C4.6888 5.63302 4.50611 5.62453 4.43016 5.57832L3.21774 4.83642C2.96654 4.68347 2.58842 4.71003 2.34997 4.92352L1.72225 5.55177C1.62274 5.66923 1.56193 5.81456 1.54815 5.96789C1.53436 6.12121 1.56828 6.27506 1.64525 6.40838L2.38715 7.62134C2.43707 7.70312 2.44503 7.8736 2.39671 7.9745L2.2119 8.42219C2.18056 8.51247 2.05417 8.62771 1.9607 8.65002L0.577801 8.983C0.429867 9.02306 0.297306 9.10648 0.197174 9.22251C0.0970419 9.33854 0.0339207 9.48188 0.015932 9.63408C0.0169942 9.63408 0 9.81837 0 10.0945C0 10.3707 0.0169942 10.555 0.0169942 10.5555C0.035052 10.7077 0.0981978 10.851 0.198319 10.967C0.29844 11.083 0.430964 11.1664 0.578864 11.2066L1.9607 11.539ZM0.531067 10.0945C0.531067 9.85129 0.545406 9.68719 0.545937 9.68188C0.554399 9.64056 0.573282 9.60208 0.600794 9.57011C0.628306 9.53814 0.663534 9.51372 0.703133 9.49919L2.08603 9.16621C2.35422 9.10142 2.62454 8.85607 2.70844 8.61019L2.88051 8.19224C3.00159 7.94423 2.9846 7.57992 2.84068 7.34412L2.09878 6.1317C2.0632 6.07275 2.07329 5.95591 2.10834 5.91608L2.71429 5.3096C2.76261 5.26659 2.88582 5.25596 2.94105 5.28942L4.15401 6.03132C4.38396 6.17206 4.77801 6.18162 4.98672 6.07806L5.40521 5.90493C5.66596 5.81518 5.91131 5.54487 5.9761 5.27615L6.30855 3.89378C6.32296 3.85405 6.34733 3.81869 6.37931 3.79107C6.4113 3.76346 6.44984 3.74451 6.49124 3.73605C6.49655 3.73605 6.66065 3.72171 6.90388 3.72171C7.14711 3.72171 7.31121 3.73605 7.31652 3.73658C7.35784 3.74504 7.39632 3.76393 7.42829 3.79144C7.46026 3.81895 7.48467 3.85418 7.4992 3.89378L7.83218 5.27615C7.89697 5.54433 8.1418 5.81518 8.38821 5.89909L8.80616 6.07115C9.04886 6.19011 9.42486 6.17153 9.65428 6.03132L10.8667 5.28942C10.9219 5.25596 11.0526 5.27349 11.0823 5.29898L11.6888 5.90493C11.7345 5.95644 11.7446 6.07275 11.709 6.1317L10.9671 7.34465C10.8232 7.57992 10.8062 7.94476 10.9203 8.17737L11.0935 8.59585C11.1832 8.8566 11.4535 9.10196 11.7223 9.16675L13.1046 9.49919C13.1443 9.51361 13.1797 9.53797 13.2073 9.56996C13.2349 9.60194 13.2539 9.64048 13.2623 9.68188C13.2623 9.68719 13.2767 9.85129 13.2767 10.0945C13.2767 10.3377 13.2623 10.5018 13.2618 10.5072C13.2534 10.5485 13.2345 10.587 13.207 10.6189C13.1794 10.6509 13.1442 10.6753 13.1046 10.6898L11.7217 11.0228C11.4535 11.0876 11.1832 11.333 11.0993 11.5789L10.9272 11.9968C10.8062 12.2448 10.8232 12.6091 10.9671 12.8449L11.709 14.0573C11.7446 14.1163 11.7345 14.2331 11.6994 14.273L11.0935 14.8794C11.0551 14.9081 11.0081 14.9229 10.9602 14.9214C10.9278 14.9224 10.8958 14.9149 10.8672 14.8996L9.65428 14.1577C9.42486 14.0175 9.0308 14.0074 8.82156 14.111L8.40308 14.2841C8.14233 14.3739 7.89697 14.6447 7.83271 14.9129L7.49973 16.2953C7.48532 16.335 7.46096 16.3704 7.42897 16.398C7.39699 16.4256 7.35845 16.4445 7.31705 16.453C7.31121 16.453 7.14711 16.4673 6.90388 16.4673C6.66065 16.4673 6.49655 16.453 6.49124 16.4525C6.44991 16.444 6.41144 16.4251 6.37947 16.3976C6.34749 16.3701 6.32308 16.3349 6.30855 16.2953L5.97557 14.9124C5.91078 14.6442 5.66543 14.3739 5.41954 14.29L5.00159 14.1179C4.88275 14.0626 4.75292 14.035 4.62188 14.0372C4.44716 14.0372 4.28094 14.0802 4.15348 14.1582L2.94105 14.9002C2.88582 14.9336 2.75465 14.9156 2.72544 14.8906L2.11896 14.2841C2.07329 14.2326 2.0632 14.1163 2.09878 14.0573L2.84068 12.8444C2.9846 12.6091 3.00159 12.2443 2.88741 12.0117L2.71429 11.5932C2.62454 11.3324 2.35422 11.0871 2.0855 11.0223L0.703133 10.6898C0.663409 10.6754 0.628047 10.6511 0.600431 10.6191C0.572815 10.5871 0.553869 10.5486 0.545406 10.5072C0.545406 10.5018 0.531067 10.3377 0.531067 10.0945Z" fill="currentColor" />
                                    <path d="M6.9039 13.0154C8.51463 13.0154 9.82477 11.7053 9.82477 10.0945C9.82477 8.4838 8.51463 7.17366 6.9039 7.17366C5.29318 7.17366 3.98303 8.4838 3.98303 10.0945C3.98303 11.7053 5.29318 13.0154 6.9039 13.0154ZM6.9039 7.70473C8.22148 7.70473 9.29371 8.77695 9.29371 10.0945C9.29371 11.4121 8.22148 12.4843 6.9039 12.4843C5.58633 12.4843 4.5141 11.4121 4.5141 10.0945C4.5141 8.77695 5.58633 7.70473 6.9039 7.70473ZM14.5922 2.82634C14.5565 2.86636 14.5077 2.89235 14.4546 2.89963L13.4663 2.89007C13.3443 2.8933 13.2261 2.93269 13.1265 3.00322C13.027 3.07375 12.9506 3.17225 12.9071 3.28625C12.9071 3.28625 12.8635 3.40998 12.8157 3.59958C12.768 3.78917 12.7478 3.91875 12.7478 3.91875C12.7106 4.15826 12.8439 4.42326 13.0579 4.53532L13.9294 4.99203C13.9761 5.02743 14.0076 5.07926 14.0176 5.13702L14.0669 5.47424C14.0701 5.52752 14.0543 5.58019 14.0223 5.62294L13.3203 6.31121C13.1445 6.48327 13.0983 6.77748 13.2194 7.0085L13.5375 7.53957C13.6718 7.73712 13.9629 7.83803 14.1912 7.76686L15.1599 7.47053C15.2125 7.47053 15.265 7.49071 15.2948 7.51461L15.5683 7.71641C15.6081 7.75225 15.634 7.80093 15.6416 7.85396L15.632 8.83749C15.6299 9.07966 15.7998 9.32236 16.0282 9.40202C16.0282 9.40202 16.1519 9.44557 16.3415 9.49336C16.5311 9.54116 16.6607 9.56134 16.6607 9.56134C16.6745 9.56346 16.7297 9.56771 16.7435 9.56771C16.8524 9.56635 16.959 9.5364 17.0527 9.48085C17.1464 9.4253 17.2238 9.3461 17.2772 9.2512L17.734 8.37971C17.7694 8.333 17.8212 8.30149 17.8789 8.29156L18.231 8.24057C18.2841 8.24057 18.3468 8.26819 18.3643 8.28625L19.0526 8.98832C19.2199 9.15932 19.5019 9.22039 19.7499 9.08922L20.2804 8.77111C20.4833 8.63303 20.5815 8.35157 20.5083 8.11737L20.2151 7.17897C20.2073 7.12064 20.2221 7.06153 20.2565 7.01381L20.4583 6.74031C20.494 6.70029 20.5428 6.6743 20.5959 6.66702L21.5842 6.67658C21.7062 6.67335 21.8244 6.63397 21.924 6.56343C22.0235 6.4929 22.0999 6.3944 22.1434 6.2804C22.1434 6.2804 22.187 6.15667 22.2348 5.96707C22.2826 5.77748 22.3027 5.6479 22.3027 5.6479C22.3185 5.52591 22.2974 5.40199 22.2421 5.29211C22.1868 5.18222 22.0999 5.0914 21.9926 5.03133L21.1211 4.57462C21.0744 4.53922 21.0429 4.48739 21.033 4.42963L20.9841 4.09347C20.981 4.04019 20.9968 3.98752 21.0287 3.94477L21.7308 3.25651C21.9066 3.08444 21.9528 2.79023 21.8317 2.55921L21.5136 2.02815C21.3792 1.83112 21.0887 1.72916 20.8598 1.80032L19.8906 2.09665C19.8421 2.09659 19.7949 2.08116 19.7557 2.05258L19.4822 1.85077C19.4424 1.81493 19.4165 1.76625 19.4089 1.71322L19.4185 0.729687C19.4165 0.60677 19.3776 0.487288 19.307 0.386662C19.2364 0.286035 19.1372 0.208883 19.0223 0.165162C19.0223 0.165162 18.8986 0.121614 18.709 0.0738184C18.5194 0.0260223 18.3898 0.00584174 18.3898 0.00584174C18.3623 0.00310231 18.3347 0.00115426 18.307 0C18.1981 0.00135645 18.0915 0.0313116 17.9978 0.0868632C17.9041 0.142415 17.8267 0.221612 17.7733 0.316516L17.3165 1.188C17.2811 1.23471 17.2293 1.26622 17.1716 1.27616L16.8195 1.32661C16.7714 1.32557 16.7248 1.30961 16.6862 1.28093L15.9979 0.578864C15.9079 0.489357 15.7915 0.43121 15.666 0.413036C15.5404 0.394862 15.4123 0.417628 15.3006 0.477961L14.7695 0.795539C14.5667 0.933617 14.4684 1.21508 14.5417 1.44928L14.8349 2.38768C14.8427 2.44601 14.8279 2.50512 14.7934 2.55284L14.5922 2.82634ZM15.0276 3.13011L15.2098 2.88263C15.3521 2.71429 15.4074 2.43972 15.3415 2.22995L15.0489 1.29209C15.0462 1.27722 15.0579 1.24376 15.0553 1.24323L15.5587 0.941583L15.6187 0.950611L16.3075 1.65268C16.4297 1.77695 16.6309 1.85767 16.82 1.85767C16.8564 1.85825 16.8927 1.85486 16.9283 1.84758L17.2337 1.80244C17.3484 1.78853 17.4582 1.74795 17.5544 1.68394C17.6506 1.61994 17.7305 1.5343 17.7876 1.43388L18.2438 0.562932C18.2602 0.544514 18.283 0.532949 18.3075 0.530536C18.3134 0.531067 18.4217 0.549124 18.58 0.588423C18.7377 0.628253 18.8418 0.663834 18.8465 0.665959C18.863 0.672863 18.8869 0.707382 18.888 0.724376L18.8784 1.70791C18.8763 1.92777 19.0085 2.17472 19.1795 2.28625L19.4265 2.4684C19.5906 2.60701 19.872 2.66543 20.0792 2.60011L21.0213 2.30696C21.0436 2.30696 21.0685 2.32076 21.0653 2.31386L21.367 2.81731C21.3728 2.83112 21.367 2.86617 21.358 2.87732L20.6559 3.56612C20.4992 3.72066 20.418 3.98832 20.461 4.18694L20.5056 4.4923C20.5247 4.7111 20.6798 4.94424 20.8747 5.0462L21.7456 5.50239C21.7639 5.51894 21.7754 5.54162 21.778 5.56612C21.7625 5.65768 21.7432 5.74857 21.7202 5.83856C21.6981 5.92849 21.6723 6.01744 21.6426 6.10515C21.6357 6.12161 21.6012 6.14551 21.5842 6.14658L20.5954 6.13702C20.3771 6.13702 20.1328 6.26925 20.0223 6.43813L19.8407 6.68508C19.769 6.77587 19.7197 6.88228 19.6968 6.99568C19.674 7.10908 19.6781 7.22627 19.709 7.33776L20.0016 8.27563C20.0043 8.28996 19.9926 8.32395 19.9952 8.32448L19.4918 8.62613L19.4318 8.6171L18.743 7.91503C18.6208 7.79076 18.4196 7.71004 18.2305 7.71004C18.1941 7.70947 18.1578 7.71285 18.1222 7.72013L17.8168 7.76527C17.7021 7.77918 17.5923 7.81977 17.4961 7.88377C17.3999 7.94777 17.32 8.03341 17.2629 8.13383L16.8067 9.00478C16.7903 9.0232 16.7675 9.03476 16.743 9.03718C16.6514 9.02161 16.5605 9.0023 16.4706 8.97929C16.3806 8.95727 16.2917 8.9314 16.204 8.90175C16.1875 8.89485 16.1636 8.86033 16.1625 8.84334L16.1721 7.8598C16.1742 7.63994 16.042 7.39299 15.871 7.28147L15.624 7.09931C15.5332 7.02757 15.4267 6.97825 15.3132 6.95537C15.1997 6.93249 15.0824 6.93668 14.9708 6.96761L14.0287 7.26075C14.0059 7.26075 13.9809 7.24854 13.9846 7.25385L13.683 6.7504C13.6771 6.73659 13.683 6.70154 13.692 6.69039L14.3941 6.00159C14.5507 5.84705 14.632 5.57939 14.589 5.38078L14.5444 5.07594C14.5304 4.96119 14.4898 4.8513 14.4257 4.7551C14.3616 4.6589 14.2758 4.57908 14.1753 4.52204L13.3043 4.06585C13.2861 4.04931 13.2745 4.02662 13.2719 4.00212C13.2725 3.99628 13.2905 3.88794 13.3298 3.72969C13.3696 3.57196 13.4052 3.46787 13.4074 3.46309C13.4143 3.44663 13.4488 3.42273 13.4658 3.42167L14.4546 3.43123C14.6729 3.43123 14.9172 3.29899 15.0276 3.13011Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Settings</span>
                        <span class="menu-arrow"></span>
                    </a>
                </div>
                @can('Show users')
                <div class="menu-item">
                    <a class="menu-link rounded-2 {{ Route::currentRouteName() === 'accounts.*' ? 'active' : '' }}" href="{{route('accounts.index')}}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: assets/media/icons/duotune/coding/cod009.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="currentColor"/>
                                    <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="currentColor"/>
                                    <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="currentColor"/>
                                    <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="currentColor"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Accounts</span>
                        <span class="menu-arrow"></span>
                    </a>
                </div> 
                @endcan
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    <!--end::Footer-->
</div>