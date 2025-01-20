<!DOCTYPE html>
<html lang="en" class="v2fLMH8w3xgUEQcl63H9">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Get started with a premium admin dashboard interface built with Tailwind CSS and Flowbite featuring over 50 example pages of charts, calendars, kanban boards, dashboards, CRUD pages, mailing systems, and more.">
    <meta name="author" content="Themesberg">
    <meta name="generator" content="Hugo 0.123.8">

    <title>Tailwind CSS Dashboard - Flowbite</title>

    <link rel="canonical" href="https://flowbite.com/application-ui/demo/">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://www.unpkg.com/flowbite-datepicker@1.3.2/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="https://flowbite.com/application-ui/demo/app.css">

    <link rel="apple-touch-icon" sizes="180x180" href="https://flowbite.com/application-ui/demo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://flowbite.com/application-ui/demo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://flowbite.com/application-ui/demo/favicon-16x16.png">
    <link rel="icon" type="image/png" href="https://flowbite.com/application-ui/demo/favicon.ico">
    <link rel="manifest" href="https://flowbite.com/application-ui/demo/site.webmanifest">
    <link rel="mask-icon" href="https://flowbite.com/application-ui/demo/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content="Tailwind CSS Dashboard - Flowbite">
    <meta name="twitter:description" content="Get started with a premium admin dashboard interface built with Tailwind CSS and Flowbite featuring over 50 example pages of charts, calendars, kanban boards, dashboards, CRUD pages, mailing systems, and more.">
    <meta name="twitter:image" content="https://flowbite.com/application-ui/demo/">




    <script>
        if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("v2fLMH8w3xgUEQcl63H9", "dark");
        } else {
            document.documentElement.classList.remove("v2fLMH8w3xgUEQcl63H9", "dark");
        }
    </script>

</head>

<body class="jtAJHOc7mn7b4IKRO59D h8KYXnua2NT4kTVzieom KRANKvs7gs1E_d0fCA0k">



    <nav class="_LPVUrp9Uina5fcERqWC QhmQ_v3mmDFIP9VaVOfb YRrCJSr_j5nopfm4duUc mU8yQmXJPYHX95JD515m t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 RZmKBZs1E1eXw8vkE6jY _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi">
        <div class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j">
            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _HgeI6Dx9I__pBEYsPz0">
                <button id="togglSidebarButton" aria-expanded="true" aria-controls="sidebar" class="_6aYwdjzDCvXK0bVJQOb _SmdlCf6eUKB_V9S5IDj SA5DoMHfwOFtY4h_qzuM Y3FxyuXtj2gecrGXvLEI Z4DH5a4vmjReSFRBpPgz iyrgFoJBjXFzXLcq5BhU _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW wfEkkXhq1BXGkg7xpnO1 N3Gb8rTHzm26fWGpfaqP">
                    <svg class="bLH_DeiQ7Cp4iBqeW3kq RWlOLn85L9w5_1l9GIaX" data-sidebar-toggle-collapse-icon="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"></path>
                    </svg>
                    <svg class="_SmdlCf6eUKB_V9S5IDj bLH_DeiQ7Cp4iBqeW3kq RWlOLn85L9w5_1l9GIaX" data-sidebar-toggle-expand-icon="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"></path>
                    </svg>
                </button>
                <button data-drawer-target="sidebar" data-drawer-toggle="sidebar" aria-expanded="false" aria-controls="sidebar" class="_6aYwdjzDCvXK0bVJQOb oPlV3cK5HfQEd_TT8sK9 SA5DoMHfwOFtY4h_qzuM Y3FxyuXtj2gecrGXvLEI Z4DH5a4vmjReSFRBpPgz iyrgFoJBjXFzXLcq5BhU _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW wfEkkXhq1BXGkg7xpnO1 F34pkf_DAj2DlPtfAEMV">
                    <svg class="bLH_DeiQ7Cp4iBqeW3kq RWlOLn85L9w5_1l9GIaX" data-sidebar-toggle-collapse-icon="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"></path>
                    </svg>
                </button>
                <a href="https://flowbite.com/application-ui/demo/" class="y7LTF_4HCOoAzmZm_v8k YRrCJSr_j5nopfm4duUc">
                    <img src="https://flowbite.com/application-ui/demo/images/logo.svg" class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP" alt="Flowbite Logo">
                    <span class="_rCfAafI7lqYALljdSxM BHrWGjM1Iab_fAz0_91H q1oXbofRCOhVhOSB8tiU yM_AorRf2jSON3pDsdrz OyABRrnTV_kvHV7dJ0uE">Flowbite</span>
                </a>
                <form action="#" method="GET" class="_SmdlCf6eUKB_V9S5IDj Yv6MasvLpkmInnA0LqbC _ZEjWxRKuh31dvJ40NGj">
                    <label for="topbar-search" class="_DVAfiyo21kM68EUVzEQ">Search</label>
                    <div class="ahOqFrhzLjivRe8a1kX_ skGrjyHRlWNG_cHY40Cg">
                        <div class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua TYmpscr1PwuC1dpYXDpM YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 aa_y6SeayB9fNgBD5ROa">
                            <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"></path>
                            </svg>
                        </div>
                        <input type="text" name="email" id="topbar-search" class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx nbfkCvNleKWN7Pz3_DQF __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput gx_pYWtAG2cJIqhquLbx" placeholder="Search">
                    </div>
                </form>
            </div>
            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 WD962RTivt8M5sMg7WrS">
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 R0X5VtiZIoV7IjvrxBJ_ tS181Wfa_gkJpFt03pqL">
                    <button id="toggleSidebarMobileSearch" type="button" class="mveJTCIb2WII7J4sY22F Z4DH5a4vmjReSFRBpPgz PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n _q0p_O8QLU1paqtuqmI2 KLtw3_OqL54e_zEQU_yi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW ICV24pqO8p1LJm4GEOgS F34pkf_DAj2DlPtfAEMV">
                        <span class="_DVAfiyo21kM68EUVzEQ">Search</span>

                        <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"></path>
                        </svg>
                    </button>

                    <button type="button" data-dropdown-toggle="notification-dropdown" class="mveJTCIb2WII7J4sY22F Z4DH5a4vmjReSFRBpPgz PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n _q0p_O8QLU1paqtuqmI2 KLtw3_OqL54e_zEQU_yi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW ICV24pqO8p1LJm4GEOgS">
                        <span class="_DVAfiyo21kM68EUVzEQ">View notifications</span>

                        <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z"></path>
                        </svg>
                    </button>

                    <div class="Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th _Vb9igHms0hI1PQcvp_S _SmdlCf6eUKB_V9S5IDj ZhzOGpbwY0R4TKKYr5pG Zy1Pypi71Xu6guex6urN NIAblPiyeuYQ0zW671xb wBVMFkIGfrKshbvi2gS1 mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mfNtySJCsKVaP2xnoGBY PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r" id="notification-dropdown" data-popper-placement="bottom">
                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j _9dH7mrOkzM4RTmidHTs RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE">
                            <h3>Notifications</h3>
                            <button type="button" data-tooltip-target="tooltip-options-notification" class="YRrCJSr_j5nopfm4duUc SA5DoMHfwOFtY4h_qzuM Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F Z4DH5a4vmjReSFRBpPgz PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4"></path>
                                </svg>

                                <span class="_DVAfiyo21kM68EUVzEQ">Options</span>
                            </button>
                            <div id="tooltip-options-notification" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r">
                                Options
                                <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
                            </div>
                        </div>
                        <div class="ahOqFrhzLjivRe8a1kX_ DQNz_SZt35NaATwiWXi8 sO_tinfrMVt7QYxF_dd8 _1jTZ8KXRZul60S6czNi">
                            <a href="#" class="YRrCJSr_j5nopfm4duUc EpUSgjHdM6oyMXUiK_8_ RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="TZANVyZaogC2vtqxZ7oo Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/lana-byrd.png" alt="Lana avatar">
                                    <div class="pq2JRWtiWcwYnw3xueNl XZQ1UNoAcQMIV4si4Jk_ MNgnvsy4e42uHuBwxxJg YRrCJSr_j5nopfm4duUc rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o g40_g3BQzYCOX5eZADgY y6GKdvUrd7vp_pxsFb57 _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Zm5-7a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 2a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H8Z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t6gkcSf0Bt4MLItXvDJ_ aa_y6SeayB9fNgBD5ROa">
                                    <div class="iPpA4AtZi__uabBE5IKW c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">New message from <span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Lana Byrd</span>: "Hey, what's up? All set for the presentation?"</div>
                                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">a few moments ago</div>
                                </div>
                            </a>
                            <a href="#" class="YRrCJSr_j5nopfm4duUc EpUSgjHdM6oyMXUiK_8_ RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="TZANVyZaogC2vtqxZ7oo Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/jese-leos.png" alt="Jese Leos avatar">
                                    <div class="pq2JRWtiWcwYnw3xueNl XZQ1UNoAcQMIV4si4Jk_ MNgnvsy4e42uHuBwxxJg YRrCJSr_j5nopfm4duUc rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o foDHZclRWUf2bqma2a8U _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="iRRyDh3hk0uKgmcxvdhD MNmifiddIP3pgI1Ifwlm y6GKdvUrd7vp_pxsFb57" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                            <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t6gkcSf0Bt4MLItXvDJ_ aa_y6SeayB9fNgBD5ROa">
                                    <div class="iPpA4AtZi__uabBE5IKW c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"><span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Jese leos</span> started following you.</div>
                                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">10 minutes ago</div>
                                </div>
                            </a>
                            <a href="#" class="YRrCJSr_j5nopfm4duUc EpUSgjHdM6oyMXUiK_8_ RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="TZANVyZaogC2vtqxZ7oo Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/bonnie-green.png" alt="Bonnie avatar">
                                    <div class="pq2JRWtiWcwYnw3xueNl XZQ1UNoAcQMIV4si4Jk_ MNgnvsy4e42uHuBwxxJg YRrCJSr_j5nopfm4duUc rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o zor3C6otq8jG5rQgLVwO _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf y6GKdvUrd7vp_pxsFb57" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M20.337 3.664c.213.212.354.486.404.782.294 1.711.657 5.195-.906 6.76-1.77 1.768-8.485 5.517-10.611 6.683a.987.987 0 0 1-1.176-.173l-.882-.88-.877-.884a.988.988 0 0 1-.173-1.177c1.165-2.126 4.913-8.841 6.682-10.611 1.562-1.563 5.046-1.198 6.757-.904.296.05.57.191.782.404ZM5.407 7.576l4-.341-2.69 4.48-2.857-.334a.996.996 0 0 1-.565-1.694l2.112-2.111Zm11.357 7.02-.34 4-2.111 2.113a.996.996 0 0 1-1.69-.565l-.422-2.807 4.563-2.74Zm.84-6.21a1.99 1.99 0 1 1-3.98 0 1.99 1.99 0 0 1 3.98 0Z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t6gkcSf0Bt4MLItXvDJ_ aa_y6SeayB9fNgBD5ROa">
                                    <div class="iPpA4AtZi__uabBE5IKW c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"><span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Bonnie Green</span> is requesting to upgrade the Flowbite Plan.</div>
                                    <div class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
                                        <button type="button" class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx">
                                            Accept
                                        </button>
                                        <button type="button" class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j icxWjIgUd9_dzYucx1nx">
                                            Decline
                                        </button>
                                    </div>
                                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">32 minutes ago</div>
                                </div>
                            </a>
                            <a href="#" class="YRrCJSr_j5nopfm4duUc EpUSgjHdM6oyMXUiK_8_ RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="TZANVyZaogC2vtqxZ7oo Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/joseph-mcfall.png" alt="Joseph McFall avatar">
                                    <div class="pq2JRWtiWcwYnw3xueNl XZQ1UNoAcQMIV4si4Jk_ MNgnvsy4e42uHuBwxxJg YRrCJSr_j5nopfm4duUc rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o SdPDrbResNmgnA0L4Iki _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="iRRyDh3hk0uKgmcxvdhD MNmifiddIP3pgI1Ifwlm y6GKdvUrd7vp_pxsFb57" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                            <path d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t6gkcSf0Bt4MLItXvDJ_ aa_y6SeayB9fNgBD5ROa">
                                    <div class="iPpA4AtZi__uabBE5IKW c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        <span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Joseph Mcfall</span> and <span class="ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">141 others</span> love your story. See it and view more stories.
                                    </div>
                                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">44 minutes ago</div>
                                </div>
                            </a>
                            <a href="#" class="YRrCJSr_j5nopfm4duUc EpUSgjHdM6oyMXUiK_8_ RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="TZANVyZaogC2vtqxZ7oo Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/roberta-casas.png" alt="Roberta Casas image">
                                    <div class="pq2JRWtiWcwYnw3xueNl XZQ1UNoAcQMIV4si4Jk_ MNgnvsy4e42uHuBwxxJg YRrCJSr_j5nopfm4duUc rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o _8jNXfz935bbH_fAUIpN _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="iRRyDh3hk0uKgmcxvdhD MNmifiddIP3pgI1Ifwlm y6GKdvUrd7vp_pxsFb57" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                            <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t6gkcSf0Bt4MLItXvDJ_ aa_y6SeayB9fNgBD5ROa">
                                    <div class="iPpA4AtZi__uabBE5IKW c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        <span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Leslie Livingston</span> mentioned you in a comment: <span class="ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9">@bonnie.green</span> what do you say?
                                    </div>
                                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">1 hour ago</div>
                                </div>
                            </a>
                            <a href="#" class="YRrCJSr_j5nopfm4duUc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="TZANVyZaogC2vtqxZ7oo Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/robert-brown.png" alt="Robert image">
                                    <div class="pq2JRWtiWcwYnw3xueNl XZQ1UNoAcQMIV4si4Jk_ MNgnvsy4e42uHuBwxxJg YRrCJSr_j5nopfm4duUc rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o _I92_RswYrnpS0B5dKZO _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="iRRyDh3hk0uKgmcxvdhD MNmifiddIP3pgI1Ifwlm y6GKdvUrd7vp_pxsFb57" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                            <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t6gkcSf0Bt4MLItXvDJ_ aa_y6SeayB9fNgBD5ROa">
                                    <div class="iPpA4AtZi__uabBE5IKW c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        <span class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Robert Brown</span> posted a new video: Glassmorphism - learn how to implement the new design trend.
                                    </div>
                                    <div class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">3 hours ago</div>
                                </div>
                            </a>
                        </div>
                        <a href="#" class="_Vb9igHms0hI1PQcvp_S _9dH7mrOkzM4RTmidHTs b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl lBgPGkku8NiP5ReH09_2 jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal Eu6DAInc_AYT0KJ7LY1L">
                            <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                <svg class="IRKzgyPj4qWOh2vq2xBg rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"></path>
                                </svg>

                                View all
                            </div>
                        </a>
                    </div>

                    <button type="button" data-dropdown-toggle="apps-dropdown" class="_SmdlCf6eUKB_V9S5IDj mveJTCIb2WII7J4sY22F Z4DH5a4vmjReSFRBpPgz PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n _q0p_O8QLU1paqtuqmI2 KLtw3_OqL54e_zEQU_yi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW ICV24pqO8p1LJm4GEOgS rvdRhGyExrNYTA6euxsF">
                        <span class="_DVAfiyo21kM68EUVzEQ">View notifications</span>

                        <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <div class="Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th _SmdlCf6eUKB_V9S5IDj ZhzOGpbwY0R4TKKYr5pG xdunzYpzbwcYs_0Tjgcz wBVMFkIGfrKshbvi2gS1 mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 d3C8uAdJKNl1jzfE9ynq mfNtySJCsKVaP2xnoGBY jqg6J89cvxmDiFpnV56r" id="apps-dropdown">
                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _9dH7mrOkzM4RTmidHTs RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE">
                            <h3>Applications</h3>
                            <button type="button" data-tooltip-target="tooltip-options-apps" class="YRrCJSr_j5nopfm4duUc SA5DoMHfwOFtY4h_qzuM Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F Z4DH5a4vmjReSFRBpPgz PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4"></path>
                                </svg>

                                <span class="_DVAfiyo21kM68EUVzEQ">Options</span>
                            </button>
                            <div id="tooltip-options-apps" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(264px, 48px, 0px);">
                                Options
                                <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate3d(68px, 0px, 0px);"></div>
                            </div>
                        </div>
                        <div class="xCPtuxM4_gihvpPwv9bX VWCEsSASYzme_Objbtiq iHPddplqYvrN6qWgvntn _wYiJGbRZyFZeCc8y7Sf _1jTZ8KXRZul60S6czNi">
                            <a href="https://flowbite.com/application-ui/demo/calendar/" class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" clip-rule="evenodd"></path>
                                </svg>

                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Calendar</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/video/meeting-room/" class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M14 7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7Zm2 9.387 4.684 1.562A1 1 0 0 0 22 17V7a1 1 0 0 0-1.316-.949L16 7.613v8.774Z" clip-rule="evenodd"></path>
                                </svg>

                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Meeting</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/pages/text-editor/" class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 7a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7Zm5.01 1H5v2.01h2.01V8Zm3 0H8v2.01h2.01V8Zm3 0H11v2.01h2.01V8Zm3 0H14v2.01h2.01V8Zm3 0H17v2.01h2.01V8Zm-12 3H5v2.01h2.01V11Zm3 0H8v2.01h2.01V11Zm3 0H11v2.01h2.01V11Zm3 0H14v2.01h2.01V11Zm3 0H17v2.01h2.01V11Zm-12 3H5v2.01h2.01V14ZM8 14l-.001 2 8.011.01V14H8Zm11.01 0H17v2.01h2.01V14Z" clip-rule="evenodd"></path>
                                </svg>
                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Text Editor</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/chat/" class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd"></path>
                                </svg>

                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Chat Room</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/pages/datatables/" class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Zm2 8v-2h7v2H4Zm0 2v2h7v-2H4Zm9 2h7v-2h-7v2Zm7-4v-2h-7v2h7Z" clip-rule="evenodd"></path>
                                </svg>

                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Datatables</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/kanban/" class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z" clip-rule="evenodd"></path>
                                </svg>

                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Tasks</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/mailing/inbox/" class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Zm5-7a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 2a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H8Z" clip-rule="evenodd"></path>
                                </svg>

                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Inbox</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/support/tickets/" class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 2a7 7 0 0 0-7 7 3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V9a5 5 0 1 1 10 0v7.083A2.919 2.919 0 0 1 14.083 19H14a2 2 0 0 0-2-2h-1a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a2 2 0 0 0 1.732-1h.351a4.917 4.917 0 0 0 4.83-4H19a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3 7 7 0 0 0-7-7Zm1.45 3.275a4 4 0 0 0-4.352.976 1 1 0 0 0 1.452 1.376 2.001 2.001 0 0 1 2.836-.067 1 1 0 1 0 1.386-1.442 4 4 0 0 0-1.321-.843Z" clip-rule="evenodd"></path>
                                </svg>

                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Support</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/pages/api/" class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M6.94318 11h-.85227l.96023-2.90909h1.07954L9.09091 11h-.85227l-.63637-2.10795h-.02272L6.94318 11Zm-.15909-1.14773h1.60227v.59093H6.78409v-.59093ZM9.37109 11V8.09091h1.25571c.2159 0 .4048.04261.5667.12784.162.08523.2879.20502.3779.35937.0899.15436.1349.33476.1349.5412 0 .20833-.0464.38873-.1392.54119-.0918.15246-.2211.26989-.3878.35229-.1657.0824-.3593.1236-.5809.1236h-.75003v-.61367h.59093c.0928 0 .1719-.0161.2372-.0483.0663-.03314.1169-.08002.152-.14062.036-.06061.054-.13211.054-.21449 0-.08334-.018-.15436-.054-.21307-.0351-.05966-.0857-.10511-.152-.13636-.0653-.0322-.1444-.0483-.2372-.0483h-.2784V11h-.78981Zm3.41481-2.90909V11h-.7898V8.09091h.7898Z"></path>
                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M8.31818 2c-.55228 0-1 .44772-1 1v.72878c-.06079.0236-.12113.04809-.18098.07346l-.55228-.53789c-.38828-.37817-1.00715-.37817-1.39543 0L3.30923 5.09564c-.19327.18824-.30229.44659-.30229.71638 0 .26979.10902.52813.30229.71637l.52844.51468c-.01982.04526-.03911.0908-.05785.13662H3c-.55228 0-1 .44771-1 1v2.58981c0 .5523.44772 1 1 1h.77982c.01873.0458.03802.0914.05783.1366l-.52847.5147c-.19327.1883-.30228.4466-.30228.7164 0 .2698.10901.5281.30228.7164l1.88026 1.8313c.38828.3781 1.00715.3781 1.39544 0l.55228-.5379c.05987.0253.12021.0498.18102.0734v.7288c0 .5523.44772 1 1 1h2.65912c.5523 0 1-.4477 1-1v-.7288c.1316-.0511.2612-.1064.3883-.1657l.5435.2614v.4339c0 .5523.4477 1 1 1H14v.0625c0 .5523.4477 1 1 1h.0909v.0625c0 .5523.4477 1 1 1h.6844l.4952.4823c1.1648 1.1345 3.0214 1.1345 4.1863 0l.2409-.2347c.1961-.191.3053-.454.3022-.7277-.0031-.2737-.1183-.5342-.3187-.7207l-6.2162-5.7847c.0173-.0398.0342-.0798.0506-.12h.7799c.5522 0 1-.4477 1-1V8.17969c0-.55229-.4478-1-1-1h-.7799c-.0187-.04583-.038-.09139-.0578-.13666l.5284-.51464c.1933-.18824.3023-.44659.3023-.71638 0-.26979-.109-.52813-.3023-.71637l-1.8803-1.8313c-.3883-.37816-1.0071-.37816-1.3954 0l-.5523.53788c-.0598-.02536-.1201-.04985-.1809-.07344V3c0-.55228-.4477-1-1-1H8.31818Z"></path>
                                </svg>

                                <div class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">API</div>
                            </a>
                            <button type="button" class="zlX75_iyhXwEnDUj6uRa YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"></path>
                                </svg>
                                View all
                            </button>
                        </div>
                    </div>
                    <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button" class="mveJTCIb2WII7J4sY22F Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 BkIbg_JwkgiyRW804Hhu _q0p_O8QLU1paqtuqmI2 _6wdnQrxT_dGdAdNk5AQ XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX yChACvAr1v8czJ2VO22j">
                        <svg id="theme-toggle-dark-icon" class="_SmdlCf6eUKB_V9S5IDj MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.3224 5.68708c.2935-.31028.3575-.77266.1594-1.15098-.1981-.37832-.6146-.5891-1.0368-.52467-1.50847.2302-2.93175.83665-4.12869 1.76276-1.19717.92628-2.12732 2.1411-2.69465 3.52702-.56744 1.38619-.75115 2.89299-.53164 4.37079.2195 1.4776.83393 2.8711 1.77895 4.0436.9448 1.1722 2.18683 2.0826 3.60103 2.6449 1.414.5623 2.9539.7584 4.4683.57 1.5145-.1884 2.9549-.7551 4.1784-1.6475 1.2237-.8924 2.1892-2.0806 2.7972-3.4499.1723-.3879.0809-.8423-.2279-1.1335-.3089-.2911-.7679-.3556-1.145-.1608-.8631.4459-1.8291.6799-2.8118.6791h-.0018c-1.1598.0013-2.2925-.3234-3.2596-.931-.9667-.6074-1.7244-1.4697-2.1856-2.4779-.4611-1.0078-.6079-2.1209-.4243-3.20511.1835-1.08442.6905-2.09837 1.4645-2.91681Z"></path>
                        </svg>

                        <svg id="theme-toggle-light-icon" class="_SmdlCf6eUKB_V9S5IDj MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M13 3a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0V3ZM6.343 4.929A1 1 0 0 0 4.93 6.343l1.414 1.414a1 1 0 0 0 1.414-1.414L6.343 4.929Zm12.728 1.414a1 1 0 0 0-1.414-1.414l-1.414 1.414a1 1 0 0 0 1.414 1.414l1.414-1.414ZM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-9 4a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H3Zm16 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2ZM7.757 17.657a1 1 0 1 0-1.414-1.414l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414Zm9.9-1.414a1 1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM13 19a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div id="tooltip-toggle" role="tooltip" class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf">
                        Toggle dark mode
                        <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
                    </div>
                </div>
                <div class="_SmdlCf6eUKB_V9S5IDj rxe6apEJoEk8r75xaVNG xUcCzntJXjlyYV0K8cfa _9dH7mrOkzM4RTmidHTs jqg6J89cvxmDiFpnV56r q9tHTtfvjP4K5atJnf4v"></div>
                <button type="button" class="gtlIjUq8I0xb1BZjyfWO YRrCJSr_j5nopfm4duUc _VPh6kIywCMfXFfQLas4 RpVwy4sO7Asb86CncKJ_ RwT9RGumnuqUj7lx7fdb c8dCx6gnV43hTOLV6ks5 _q0p_O8QLU1paqtuqmI2 KLtw3_OqL54e_zEQU_yi ICV24pqO8p1LJm4GEOgS _pefCw3mdzwgpGQST5xB" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="accountDropdown">
                    <span class="_DVAfiyo21kM68EUVzEQ">Open user menu</span>
                    <img class="mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf _VPh6kIywCMfXFfQLas4 RpVwy4sO7Asb86CncKJ_" src="https://flowbite.com/application-ui/demo/images/users/roberta-casas.png" alt="user photo">
                </button>

                <div id="accountDropdown" class="_SmdlCf6eUKB_V9S5IDj bRYMMxpZGWWpnEZnNVhh Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH wBVMFkIGfrKshbvi2gS1 _lTTGxW9MVI40FyDCtmr mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r" data-popper-placement="bottom">
                    <ul class="FJRldeiG2gFGZfuKgp88 Sh_nhSr0Y5lUywmHhhs_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        <li>
                            <a href="#" title="" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd"></path>
                                </svg>
                                Account
                            </a>
                        </li>
                        <li>
                            <a href="#" title="" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M9.586 2.586A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2v.089l.473.196.063-.063a2.002 2.002 0 0 1 2.828 0l1.414 1.414a2 2 0 0 1 0 2.827l-.063.064.196.473H20a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-.089l-.196.473.063.063a2.002 2.002 0 0 1 0 2.828l-1.414 1.414a2 2 0 0 1-2.828 0l-.063-.063-.473.196V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.089l-.473-.196-.063.063a2.002 2.002 0 0 1-2.828 0l-1.414-1.414a2 2 0 0 1 0-2.827l.063-.064L4.089 15H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h.09l.195-.473-.063-.063a2 2 0 0 1 0-2.828l1.414-1.414a2 2 0 0 1 2.827 0l.064.063L9 4.089V4a2 2 0 0 1 .586-1.414ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z" clip-rule="evenodd"></path>
                                </svg>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="#" title="" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd"></path>
                                </svg>
                                Privacy
                            </a>
                        </li>
                        <li>
                            <a href="#" title="" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.133 12.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.955.955 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175ZM6 6a1 1 0 0 1-.707-.293l-1-1a1 1 0 0 1 1.414-1.414l1 1A1 1 0 0 1 6 6Zm-2 4H3a1 1 0 0 1 0-2h1a1 1 0 1 1 0 2Zm14-4a1 1 0 0 1-.707-1.707l1-1a1 1 0 1 1 1.414 1.414l-1 1A1 1 0 0 1 18 6Zm3 4h-1a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z"></path>
                                </svg>
                                Notifications
                            </a>
                        </li>
                    </ul>

                    <ul class="FJRldeiG2gFGZfuKgp88 Sh_nhSr0Y5lUywmHhhs_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        <li>
                            <a href="#" title="" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd"></path>
                                </svg>
                                Help Guide
                            </a>
                        </li>
                        <li>
                            <a href="#" title="" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd"></path>
                                </svg>
                                Help Center
                            </a>
                        </li>
                    </ul>

                    <ul class="FJRldeiG2gFGZfuKgp88 Sh_nhSr0Y5lUywmHhhs_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        <li>
                            <span class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"></path>
                                </svg>

                                Limited Access

                                <label class="zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R SA5DoMHfwOFtY4h_qzuM Q_jg_EPdNf9eDMn1mLI2">
                                    <input type="checkbox" value="" class="aOpxpduJhFdYT26YEhfy _DVAfiyo21kM68EUVzEQ" name="time-limit-mode">
                                    <div class="aOpxpduJhFdYT26YEhfy ahOqFrhzLjivRe8a1kX_ rxe6apEJoEk8r75xaVNG _Ny9QDPUchYYWYAZdFEM RpVwy4sO7Asb86CncKJ_ WwS1mve_UI16RedcVHEs S_YYrpbZltCzhBNM_SJm _TBUtzAY4pgBKqt_xlfa suTnhPGy2O_0tdt_JtLf T5NeULPeRaxbuMOTvCZ4 pvtdS0kDVQDBbBe9R4XA B0lYQ0_9vlBf0CZnE9ef UnITYitJpD1sMNddmIZ9 mVEwBMPbZ9_uWPD1J6FL _o9AusRI8qWv3B0gIXh4 _6REaLtGbw9GOx78YcIB mckNmP7av8zMKc516vkZ _LFgmR5pGKzbcmZZxpN3 k0G8B6nnxyBP2SOsOaeZ K9lI4s8CJ1eWRBhVkBu_ BprGbFuFZu_JMvPp_KVR _zhHKgVWUHLt2EvhvLe2 nmPW5_vZUJWfg188gd6P _8kDN2mZyAf_kSS0wRR7 yVD6UHmZ_BcStq0KYFeK wFpbzujv4k1ue7OGEHIk __DpA37hFv9xxwpmWpYq"></div>
                                    <span class="_DVAfiyo21kM68EUVzEQ">Toggle time-limited access on</span>
                                </label>
                            </span>
                        </li>
                    </ul>

                    <ul class="FJRldeiG2gFGZfuKgp88 Sh_nhSr0Y5lUywmHhhs_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        <li>
                            <a href="#" title="" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 m_WzesDEb91pTPmX64rt _0tuqSFFgAPtInMS4ZnM Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"></path>
                                </svg>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="YRrCJSr_j5nopfm4duUc wBVMFkIGfrKshbvi2gS1 jtAJHOc7mn7b4IKRO59D UZ9xFK4mqjHjj8e8yJwf h8KYXnua2NT4kTVzieom">
        <aside id="sidebar" class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM uQByIGHtHssL9HoPQXR4 rBEQnDddLcKNSnbv_P6W rhJ7qSuv_H6qJxmzGcAa nUVQqdd_RQjvvOrcRIpD gJkA1vzadgWLGEfN5oKt tydApFk2TI9aladuOmdP gZ3KuFw1JESHhOJhjT8j l1DoGdw3bRhV5LHHY_iu mJTIhpUssMkzLKe2zbZD N5jaibiQ4mxzTXKEGva7 _4WgNWc3cZlZk30Mtf_0" aria-label="Sidebar">
            <div class="uLPch_bqyJDXwe5tynMV _lTTGxW9MVI40FyDCtmr hEIh0_vxSXD_ZBXYxnd0 qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI _9igzqn_6D3Qq5Hcwkfk _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi">
                <ul class="TVHgSaRh3muGJct_epr9">
                    <li>
                        <button type="button" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-dashboards" data-collapse-toggle="dropdown-dashboards" data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z"></path>
                                <path d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z"></path>
                            </svg>

                            <span class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w" data-sidebar-collapse-hide="">Dashboards</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="">
                            <ul id="dropdown-dashboards" class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/saas/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">SaaS</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/e-commerce/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">E-commerce</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/marketing/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Marketing</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/car-service/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Car Service</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/logistics/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Logistics</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/bank/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Bank</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/crypto/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Crypto</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/music/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Music</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/project-management/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Project Management</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/customer-service/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Customer Service</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages" data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm2-2a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2h-3Zm0 3a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2h-3Zm-6 4a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-6Zm8 1v1h-2v-1h2Zm0 3h-2v1h2v-1Zm-4-3v1H9v-1h2Zm0 3H9v1h2v-1Z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w" data-sidebar-collapse-hide="">Pages</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="">
                            <ul id="dropdown-pages" class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/kanban/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Kanban</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/calendar/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Calendar</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/chat-room/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Chat Room</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/text-editor/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Text Editor</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/ai-chat/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">AI Chat</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/datatables/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Data Tables</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/notifications/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Notifications</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/events/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Events</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/integrations/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Integrations</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/api/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">API Keys</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/pricing/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Pricing</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales" data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M14 7h-4v3a1 1 0 0 1-2 0V7H6a1 1 0 0 0-.997.923l-.917 11.924A2 2 0 0 0 6.08 22h11.84a2 2 0 0 0 1.994-2.153l-.917-11.924A1 1 0 0 0 18 7h-2v3a1 1 0 1 1-2 0V7Zm-2-3a2 2 0 0 0-2 2v1H8V6a4 4 0 0 1 8 0v1h-2V6a2 2 0 0 0-2-2Z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w" data-sidebar-collapse-hide="">E-commerce</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="">
                            <ul id="dropdown-sales" class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/products/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Products</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/billing/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Billing</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/invoices/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Invoices</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/invoice/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Single Invoice</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/create-invoice/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Create Invoice</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/transactions/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Transactions</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/transaction/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Single Transaction</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-users" data-collapse-toggle="dropdown-users" data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"></path>
                            </svg>

                            <span class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w" data-sidebar-collapse-hide="">Users</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="">
                            <ul id="dropdown-users" class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/users/list/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">All Users</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/users/settings/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Settings</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/users/profile/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Profile</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/users/feed/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Activity</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-support" data-collapse-toggle="dropdown-support" data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2a7 7 0 0 0-7 7 3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V9a5 5 0 1 1 10 0v7.083A2.919 2.919 0 0 1 14.083 19H14a2 2 0 0 0-2-2h-1a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a2 2 0 0 0 1.732-1h.351a4.917 4.917 0 0 0 4.83-4H19a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3 7 7 0 0 0-7-7Zm1.45 3.275a4 4 0 0 0-4.352.976 1 1 0 0 0 1.452 1.376 2.001 2.001 0 0 1 2.836-.067 1 1 0 1 0 1.386-1.442 4 4 0 0 0-1.321-.843Z" clip-rule="evenodd"></path>
                            </svg>

                            <span class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w" data-sidebar-collapse-hide="">Support</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="">
                            <ul id="dropdown-support" class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/support/tickets/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Tickets Overview</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/support/ticket/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Ticket Reply</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-project-management" data-collapse-toggle="dropdown-project-management" data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2a1 1 0 0 0-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.707 8.707a1 1 0 0 0-1.414-1.414L11 14.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"></path>
                            </svg>

                            <span class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w" data-sidebar-collapse-hide="">Projects</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="">
                            <ul id="dropdown-project-management" class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/project-management/to-do/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">To Do</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/project-management/all-projects/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">All Projects</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/project-management/my-projects/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">My Projects</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/project-management/project-summary/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Project Summary</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/project-management/to-do-upcoming/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">My Tasks</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/project-management/all-files/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">All Files</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-mailing" data-collapse-toggle="dropdown-mailing" data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 6h-2V5h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2h-.541A5.965 5.965 0 0 1 14 10v4a1 1 0 1 1-2 0v-4c0-2.206-1.794-4-4-4-.075 0-.148.012-.22.028C7.686 6.022 7.596 6 7.5 6A4.505 4.505 0 0 0 3 10.5V16a1 1 0 0 0 1 1h7v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3h5a1 1 0 0 0 1-1v-6c0-2.206-1.794-4-4-4Zm-9 8.5H7a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2Z"></path>
                            </svg>
                            <span class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w" data-sidebar-collapse-hide="">Mailing</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="">
                            <ul id="dropdown-mailing" class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/mailing/inbox/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Inbox</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/mailing/read/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Read</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/mailing/reply/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Reply</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-video-call" data-collapse-toggle="dropdown-video-call" data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M14 7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7Zm2 9.387 4.684 1.562A1 1 0 0 0 22 17V7a1 1 0 0 0-1.316-.949L16 7.613v8.774Z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w" data-sidebar-collapse-hide="">Video Call</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="">
                            <ul id="dropdown-video-call" class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/video/create-meeting/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Create Meeting</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/video/join-call/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Join Call</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/video/meeting-room/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Meeting Room</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/video/rate-conversation/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Rate Conversation</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-audio-call" data-collapse-toggle="dropdown-audio-call" data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"></path>
                            </svg>
                            <span class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w" data-sidebar-collapse-hide="">Audio Call</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="">
                            <ul id="dropdown-audio-call" class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/audio/outgoing-call/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Outgoing Call</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/audio/incoming-call/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Incoming Call</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/audio/in-call/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">In Call</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/audio/call-ended/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Call Ended</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication" data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd"></path>
                            </svg>

                            <span class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w" data-sidebar-collapse-hide="">Authentication</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="">
                            <ul id="dropdown-authentication" class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/authentication/sign-in/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Sign In</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/authentication/sign-up/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Sign Up</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/authentication/forgot-password/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Forgot Password</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/authentication/reset-password/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Reset Password</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/authentication/two-factor/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Two Factor</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/authentication/profile-lock/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Profile Lock</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX" aria-controls="dropdown-status" data-collapse-toggle="dropdown-status" data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z" clip-rule="evenodd"></path>
                            </svg>

                            <span class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w" data-sidebar-collapse-hide="">Status Pages</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="">
                            <ul id="dropdown-status" class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/status/404/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">404 Not Found</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/status/500/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">500 Server Error</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/status/maintenance/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Maintenance</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/status/server-status/" class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" data-sidebar-collapse-subitem="">Server Status</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="tWsY5Fnz4tNG7Tvdaxnz TVHgSaRh3muGJct_epr9 pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V LVS5VhNiuUNp2iESGVfr _fGhMnSfYmaGrv7DvZ00">
                    <li>
                        <a data-sidebar-collapse-item="" href="https://flowbite.com/pro/" target="_blank" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M20.337 3.664c.213.212.354.486.404.782.294 1.711.657 5.195-.906 6.76-1.77 1.768-8.485 5.517-10.611 6.683a.987.987 0 0 1-1.176-.173l-.882-.88-.877-.884a.988.988 0 0 1-.173-1.177c1.165-2.126 4.913-8.841 6.682-10.611 1.562-1.563 5.046-1.198 6.757-.904.296.05.57.191.782.404ZM5.407 7.576l4-.341-2.69 4.48-2.857-.334a.996.996 0 0 1-.565-1.694l2.112-2.111Zm11.357 7.02-.34 4-2.111 2.113a.996.996 0 0 1-1.69-.565l-.422-2.807 4.563-2.74Zm.84-6.21a1.99 1.99 0 1 1-3.98 0 1.99 1.99 0 0 1 3.98 0Z" clip-rule="evenodd"></path>
                            </svg>

                            <path d="m7.4 3.736 3.43 3.429A5.046 5.046 0 0 1 12.133 7c.356.01.71.06 1.056.147l3.41-3.412a2.32 2.32 0 0 1 .451-.344A9.89 9.89 0 0 0 12.268 2a10.022 10.022 0 0 0-5.322 1.392c.165.095.318.211.454.344Zm11.451 1.54-.127-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.03.023.05.054.078.077.237.194.454.41.651.645.033.038.077.067.11.107l2.926-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.025.03-.058.052-.082.082a4.97 4.97 0 0 1-.633.639c-.04.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.443-4.763a3.037 3.037 0 0 0-1.383-1.1l-.012-.007a2.956 2.956 0 0 0-1-.213H12a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.009.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .488 1.716l.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.319.129.657.2 1 .213.393.015.784-.05 1.15-.192.012-.005.021-.013.033-.018a3.01 3.01 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.349.447l-3.426 3.426c.112.428.166.869.161 1.311a4.954 4.954 0 0 1-.148 1.054l3.413 3.412c.133.134.249.283.347.444A9.88 9.88 0 0 0 22 12.269a9.913 9.913 0 0 0-1.386-5.319ZM16.6 20.264l-3.42-3.421c-.386.1-.782.152-1.18.157h-.135c-.356-.01-.71-.06-1.056-.147L7.4 20.265a2.503 2.503 0 0 1-.444.347A9.884 9.884 0 0 0 11.732 22H12a9.9 9.9 0 0 0 5.044-1.388 2.515 2.515 0 0 1-.444-.348ZM3.735 16.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L3.735 7.4a2.508 2.508 0 0 1-.349-.447 9.889 9.889 0 0 0 0 10.1 2.48 2.48 0 0 1 .35-.453Zm5.101-.758a4.959 4.959 0 0 1-.65-.645c-.034-.038-.078-.067-.11-.107L5.15 18.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.029-.018-.049-.053-.078-.076Zm-.755-6.928c.03-.037.07-.063.1-.1.183-.22.383-.423.6-.609.046-.04.081-.092.128-.13L5.983 5.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707l2.932 2.931Z">

                                <span class="oA7zcT_42jVeFuWTXQnq" data-sidebar-collapse-hide="">Upgrade to pro</span>
                            </path>
                        </a>
                    </li>
                    <li>
                        <a data-sidebar-collapse-item="" href="https://flowbite.com/docs/getting-started/introduction/" target="_blank" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="oA7zcT_42jVeFuWTXQnq" data-sidebar-collapse-hide="">Docs</span>
                        </a>
                    </li>
                    <li>
                        <a data-sidebar-collapse-item="" href="https://flowbite.com/blocks/" target="_blank" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M5 3a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5Zm14 18a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4ZM5 11a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H5Zm14 2a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4Z"></path>
                            </svg>
                            <span class="oA7zcT_42jVeFuWTXQnq" data-sidebar-collapse-hide="">Components</span>
                        </a>
                    </li>
                    <li>
                        <a data-sidebar-collapse-item="" href="https://flowbite.com/contact/" target="_blank" class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="m7.4 3.736 3.43 3.429A5.046 5.046 0 0 1 12.133 7c.356.01.71.06 1.056.147l3.41-3.412a2.32 2.32 0 0 1 .451-.344A9.89 9.89 0 0 0 12.268 2a10.022 10.022 0 0 0-5.322 1.392c.165.095.318.211.454.344Zm11.451 1.54-.127-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.03.023.05.054.078.077.237.194.454.41.651.645.033.038.077.067.11.107l2.926-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.025.03-.058.052-.082.082a4.97 4.97 0 0 1-.633.639c-.04.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.443-4.763a3.037 3.037 0 0 0-1.383-1.1l-.012-.007a2.956 2.956 0 0 0-1-.213H12a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.009.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .488 1.716l.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.319.129.657.2 1 .213.393.015.784-.05 1.15-.192.012-.005.021-.013.033-.018a3.01 3.01 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.349.447l-3.426 3.426c.112.428.166.869.161 1.311a4.954 4.954 0 0 1-.148 1.054l3.413 3.412c.133.134.249.283.347.444A9.88 9.88 0 0 0 22 12.269a9.913 9.913 0 0 0-1.386-5.319ZM16.6 20.264l-3.42-3.421c-.386.1-.782.152-1.18.157h-.135c-.356-.01-.71-.06-1.056-.147L7.4 20.265a2.503 2.503 0 0 1-.444.347A9.884 9.884 0 0 0 11.732 22H12a9.9 9.9 0 0 0 5.044-1.388 2.515 2.515 0 0 1-.444-.348ZM3.735 16.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L3.735 7.4a2.508 2.508 0 0 1-.349-.447 9.889 9.889 0 0 0 0 10.1 2.48 2.48 0 0 1 .35-.453Zm5.101-.758a4.959 4.959 0 0 1-.65-.645c-.034-.038-.078-.067-.11-.107L5.15 18.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.029-.018-.049-.053-.078-.076Zm-.755-6.928c.03-.037.07-.063.1-.1.183-.22.383-.423.6-.609.046-.04.081-.092.128-.13L5.983 5.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707l2.932 2.931Z"></path>
                            </svg>
                            <span class="oA7zcT_42jVeFuWTXQnq" data-sidebar-collapse-hide="">Help</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="main-content" class="ahOqFrhzLjivRe8a1kX_ uLPch_bqyJDXwe5tynMV t6gkcSf0Bt4MLItXvDJ_ pdl952ted2i71qBLPIcQ jtAJHOc7mn7b4IKRO59D h8KYXnua2NT4kTVzieom MKeLnCkZhCbipNorZ2hW">
            <main>
                {{ $slot }}

            </main>


        </div>
    </div>

    <script src="https://flowbite.com/application-ui/demo/app.bundle.js"></script>




</body>

</html>