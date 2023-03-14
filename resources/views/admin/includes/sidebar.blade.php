<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href=""><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>

            <li class="nav-item"><a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">اللغات </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">5</span>
                </a>
                <ul class="menu-content">
                    <li class="inactive">
                        <a class="menu-item" href="{{route('admin.languages')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.languages.create')}}" data-i18n="nav.dash.crypto">أضافة
                            لغة جديد </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">@lang('messages.Main-Categories') </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="inactive"><a class="menu-item" href="{{route('admin.maincategories')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.maincategories.create')}}" data-i18n="nav.dash.crypto">أضافة
                            قسم </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">@lang('messages.Sub-Categories') </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="inactive"><a class="menu-item" href="{{route('admin.subcategories')}}"
                                            data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.subcategories.create')}}" data-i18n="nav.dash.crypto">أضافة
                            قسم </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">@lang('messages.meals')  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="inactive"><a class="menu-item" href="{{route('admin.meals')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.meals.create')}}" data-i18n="nav.dash.crypto">أضافة
                            منتج </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">@lang('messages.Restaurants')  </span>
                    <span
                        class="badge badge badge-warning  badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="inactive"><a class="menu-item" href="{{route('admin.restaurants')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                            طالب </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href="{{route('admin.coupons')}}"><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">@lang('messages.coupons')   </span>
                    <span
                        class="badge badge badge-danger  badge-pill float-right mr-2">0</span>
                </a>
                <ul class="menu-content">
                    <li class="inactive"><a class="menu-item" href="{{route('admin.coupons')}}"
                                          data-i18n="nav.dash.ecommerce"> @lang('messages.all-coupons') </a>
                    </li>
                </ul>
            </li>


            <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title"
                                                                                    data-i18n="nav.templates.main">@lang('messages.sales')</span></a>
                <ul class="menu-content">
                    <li class="inactive"><a class="menu-item" href="{{route('admin.sales')}}"
                                            data-i18n="nav.dash.ecommerce"> @lang('messages.all-sales') </a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.layouts">Clients</span>
                <i class="la la-ellipsis-h ft-minus"
                data-toggle="tooltip"
                data-placement="right"
                data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item">
                <a href="{{route('admin.orders.all')}}">
                    <i class="la la-columns"></i><span class="menu-title"
                                                                                 data-i18n="nav.page_layouts.main">
                        The orders</span><span
                        class="badge badge badge-pill badge-danger float-right mr-2">New</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('admin.orders.shipped')}}" data-i18n="nav.page_layouts.1_column">
                            Shipping
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('admin.orders.pended')}}" data-i18n="nav.page_layouts.1_column">
                            Pended
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('admin.orders.delivered')}}" data-i18n="nav.page_layouts.1_column">
                            Delivered
                        </a>
                    </li>

                    <li>
                        <a class="menu-item" href="{{route('admin.orders.canceled')}}" data-i18n="nav.page_layouts.1_column">
                            Canceled
                        </a>
                    </li>

                    <li>
                        <a class="menu-item" href="{{route('admin.orders.all')}}" data-i18n="nav.page_layouts.1_column">
                            All
                        </a>
                    </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns_detached.main">
                            Sliders
                            </a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="layout-content-detached-left-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns_detached.detached_left_sidebar">Detached left
                                    sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-detached-left-sticky-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar">Detached
                                    sticky left sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-detached-right-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns_detached.detached_right_sidebar">Detached right
                                    sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-detached-right-sticky-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_right_sidebar">Detached
                                    sticky right sidebar</a>
                            </li>
                        </ul>
                    </li>

            <li class=" nav-item"><a href="#"><i class="la la-code-fork"></i><span class="menu-title"
                                                                                   data-i18n="nav.jquery_ui.main">jQuery UI</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="jquery-ui-interactions.html"
                           data-i18n="nav.jquery_ui.jquery_ui_interactions">Interactions</a>
                    </li>
                    <li><a class="menu-item" href="jquery-ui-navigations.html"
                           data-i18n="nav.jquery_ui.jquery_ui_navigations">Navigations</a>
                    </li>
                    <li><a class="menu-item" href="jquery-ui-date-pickers.html"
                           data-i18n="nav.jquery_ui.jquery_ui_date_pickers">Date Pickers</a>
                    </li>
                    <li><a class="menu-item" href="jquery-ui-autocomplete.html"
                           data-i18n="nav.jquery_ui.jquery_ui_autocomplete">Autocomplete</a>
                    </li>
                    <li><a class="menu-item" href="jquery-ui-buttons-select.html"
                           data-i18n="nav.jquery_ui.jquery_ui_buttons_select">Buttons &amp; Select</a>
                    </li>
                    <li><a class="menu-item" href="jquery-ui-slider-spinner.html"
                           data-i18n="nav.jquery_ui.jquery_ui_slider_spinner">Slider &amp; Spinner</a>
                    </li>
                    <li><a class="menu-item" href="jquery-ui-dialog-tooltip.html"
                           data-i18n="nav.jquery_ui.jquery_ui_dialog_tooltip">Dialog &amp; Tooltip</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="add-on-block-ui.html"><i class="la la-terminal"></i><span class="menu-title"
                                                                                                     data-i18n="nav.add_on_block_ui.main">Block UI</span></a>
            </li>
            <li class=" nav-item"><a href="add-on-image-cropper.html"><i class="la la-crop"></i><span class="menu-title"
                                                                                                      data-i18n="nav.add_on_image_cropper.main">Image Cropper</span></a>
            </li>
            <li class=" nav-item"><a href="add-on-drag-drop.html"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">Drag &amp; Drop</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-cloud-upload"></i><span class="menu-title"
                                                                                      data-i18n="nav.file_uploaders.main">File Uploader</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="file-uploader-dropzone.html"
                           data-i18n="nav.file_uploaders.file_uploader_dropzone">Dropzone</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-calendar"></i><span class="menu-title"
                                                                                  data-i18n="nav.event_calendars.main">Event Calendars</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.event_calendars.full_calender.main">Full
                            Calendar</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="full-calender-basic.html"
                                   data-i18n="nav.event_calendars.full_calender.full_calender_basic">Basic</a>
                            </li>
                            <li><a class="menu-item" href="full-calender-events.html"
                                   data-i18n="nav.event_calendars.full_calender.full_calender_events">Events</a>
                            </li>
                            <li><a class="menu-item" href="full-calender-advance.html"
                                   data-i18n="nav.event_calendars.full_calender.full_calender_advance">Advance</a>
                            </li>
                            <li><a class="menu-item" href="full-calender-extra.html"
                                   data-i18n="nav.event_calendars.full_calender.full_calender_extra">Extra</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="calendars-clndr.html"
                           data-i18n="nav.event_calendars.calendars_clndr">CLNDR</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-flag-o"></i><span class="menu-title"
                                                                                data-i18n="nav.internationalization.main">Internationalization</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="i18n-resources.html"
                           data-i18n="nav.internationalization.i18n_resources">Resources</a>
                    </li>
                    <li><a class="menu-item" href="i18n-xhr-backend.html"
                           data-i18n="nav.internationalization.i18n_xhr_backend">XHR Backend</a>
                    </li>
                    <li><a class="menu-item" href="i18n-query-string.html?lng=en"
                           data-i18n="nav.internationalization.i18n_query_string">Query String</a>
                    </li>
                    <li><a class="menu-item" href="i18n-on-init.html" data-i18n="nav.internationalization.i18n_on_init">On
                            Init</a>
                    </li>
                    <li><a class="menu-item" href="i18n-after-init.html"
                           data-i18n="nav.internationalization.i18n_after_init">After Init</a>
                    </li>
                    <li><a class="menu-item" href="i18n-fallback.html"
                           data-i18n="nav.internationalization.i18n_fallback">Fallback</a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.charts_maps">Charts &amp; Maps</span><i class="la la-ellipsis-h ft-minus"
                                                                                      data-toggle="tooltip"
                                                                                      data-placement="right"
                                                                                      data-original-title="Charts &amp; Maps"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-bar-chart"></i><span class="menu-title"
                                                                                   data-i18n="nav.google_charts.main">google Charts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="google-bar-charts.html"
                           data-i18n="nav.google_charts.google_bar_charts">Bar charts</a>
                    </li>
                    <li><a class="menu-item" href="google-line-charts.html"
                           data-i18n="nav.google_charts.google_line_charts">Line charts</a>
                    </li>
                    <li><a class="menu-item" href="google-pie-charts.html"
                           data-i18n="nav.google_charts.google_pie_charts">Pie charts</a>
                    </li>
                    <li><a class="menu-item" href="google-scatter-charts.html"
                           data-i18n="nav.google_charts.google_scatter_charts">Scatter charts</a>
                    </li>
                    <li><a class="menu-item" href="google-bubble-charts.html"
                           data-i18n="nav.google_charts.google_bubble_charts">Bubble charts</a>
                    </li>
                    <li><a class="menu-item" href="google-other-charts.html"
                           data-i18n="nav.google_charts.google_other_charts">Other charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-file-photo-o"></i><span class="menu-title"
                                                                                      data-i18n="nav.echarts.main">Echarts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="echarts-line-area-charts.html"
                           data-i18n="nav.echarts.echarts_line_area_charts">Line &amp; Area charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-bar-column-charts.html"
                           data-i18n="nav.echarts.echarts_bar_column_charts">Bar &amp; Column charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-pie-doughnut-charts.html"
                           data-i18n="nav.echarts.echarts_pie_doughnut_charts">Pie &amp; Doughnut charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-scatter-charts.html"
                           data-i18n="nav.echarts.echarts_scatter_charts">Scatter charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-radar-chord-charts.html"
                           data-i18n="nav.echarts.echarts_radar_chord_charts">Radar &amp; Chord charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-funnel-gauges-charts.html"
                           data-i18n="nav.echarts.echarts_funnel_gauges_charts">Funnel &amp; Gauges charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-combination-charts.html"
                           data-i18n="nav.echarts.echarts_combination_charts">Combination charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-advance-charts.html"
                           data-i18n="nav.echarts.echarts_advance_charts">Advance charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-area-chart"></i><span class="menu-title"
                                                                                    data-i18n="nav.chartjs.main">Chartjs</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="chartjs-line-charts.html"
                           data-i18n="nav.chartjs.chartjs_line_charts">Line charts</a>
                    </li>
                    <li><a class="menu-item" href="chartjs-bar-charts.html" data-i18n="nav.chartjs.chartjs_bar_charts">Bar
                            charts</a>
                    </li>
                    <li><a class="menu-item" href="chartjs-pie-doughnut-charts.html"
                           data-i18n="nav.chartjs.chartjs_pie_doughnut_charts">Pie &amp; Doughnut charts</a>
                    </li>
                    <li><a class="menu-item" href="chartjs-scatter-charts.html"
                           data-i18n="nav.chartjs.chartjs_scatter_charts">Scatter charts</a>
                    </li>
                    <li><a class="menu-item" href="chartjs-polar-radar-charts.html"
                           data-i18n="nav.chartjs.chartjs_polar_radar_charts">Polar &amp; Radar charts</a>
                    </li>
                    <li><a class="menu-item" href="chartjs-advance-charts.html"
                           data-i18n="nav.chartjs.chartjs_advance_charts">Advance charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-line-chart"></i><span class="menu-title"
                                                                                    data-i18n="nav.d3_charts.main">D3 Charts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="d3-line-chart.html" data-i18n="nav.d3_charts.d3_line_chart">Line
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="d3-bar-chart.html" data-i18n="nav.d3_charts.d3_bar_chart">Bar
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="d3-pie-chart.html" data-i18n="nav.d3_charts.d3_pie_chart">Pie
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="d3-circle-diagrams.html"
                           data-i18n="nav.d3_charts.d3_circle_diagrams">Circle Diagrams</a>
                    </li>
                    <li><a class="menu-item" href="d3-tree-chart.html" data-i18n="nav.d3_charts.d3_tree_chart">Tree
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="d3-other-charts.html" data-i18n="nav.d3_charts.d3_other_charts">Other
                            Charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-indent"></i><span class="menu-title"
                                                                                data-i18n="nav.c3_charts.main">C3 Charts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="c3-line-chart.html" data-i18n="nav.c3_charts.c3_line_chart">Line
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="c3-bar-pie-chart.html" data-i18n="nav.c3_charts.c3_bar_pie_chart">Bar
                            &amp; Pie Chart</a>
                    </li>
                    <li><a class="menu-item" href="c3-axis-chart.html" data-i18n="nav.c3_charts.c3_axis_chart">Axis
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="c3-data-chart.html" data-i18n="nav.c3_charts.c3_data_chart">Data
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="c3-grid-chart.html" data-i18n="nav.c3_charts.c3_grid_chart">Grid
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="c3-transform-chart.html"
                           data-i18n="nav.c3_charts.c3_transform_chart">Transform Chart</a>
                    </li>
                    <li><a class="menu-item" href="c3-other-charts.html" data-i18n="nav.c3_charts.c3_other_charts">Other
                            Charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-pie-chart"></i><span class="menu-title"
                                                                                   data-i18n="nav.chartist.main">Chartist</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="chartist-line-charts.html"
                           data-i18n="nav.chartist.chartist_line_charts">Line charts</a>
                    </li>
                    <li><a class="menu-item" href="chartist-bar-charts.html"
                           data-i18n="nav.chartist.chartist_bar_charts">Bar charts</a>
                    </li>
                    <li><a class="menu-item" href="chartist-pie-charts.html"
                           data-i18n="nav.chartist.chartist_pie_charts">Pie charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="morris-charts.html"><i class="la la-share-alt"></i><span class="menu-title"
                                                                                                    data-i18n="nav.morris_charts.main">Morris Charts</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-bolt"></i><span class="menu-title"
                                                                              data-i18n="nav.flot_charts.main">Flot Charts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="flot-line-charts.html" data-i18n="nav.flot_charts.flot_line_charts">Line
                            charts</a>
                    </li>
                    <li><a class="menu-item" href="flot-bar-charts.html" data-i18n="nav.flot_charts.flot_bar_charts">Bar
                            charts</a>
                    </li>
                    <li><a class="menu-item" href="flot-pie-charts.html" data-i18n="nav.flot_charts.flot_pie_charts">Pie
                            charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="rickshaw-charts.html"><i class="la la-bullseye"></i><span class="menu-title"
                                                                                                     data-i18n="nav.rickshaw_charts.main">Rickshaw Charts</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-map"></i><span class="menu-title"
                                                                             data-i18n="nav.maps.main">Maps</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.maps.google_maps.main">google Maps</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="gmaps-basic-maps.html"
                                   data-i18n="nav.maps.google_maps.gmaps_basic_maps">Maps</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-services.html"
                                   data-i18n="nav.maps.google_maps.gmaps_services">Services</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-overlays.html"
                                   data-i18n="nav.maps.google_maps.gmaps_overlays">Overlays</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-routes.html"
                                   data-i18n="nav.maps.google_maps.gmaps_routes">Routes</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-utils.html"
                                   data-i18n="nav.maps.google_maps.gmaps_utils">Utils</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.maps.vector_maps.main">Vector Maps</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="#" data-i18n="nav.maps.vector_maps.jquery_mapael.main">jQuery
                                    Mapael</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="vector-maps-mapael-basic.html"
                                           data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_basic">Basic
                                            Maps</a>
                                    </li>
                                    <li><a class="menu-item" href="vector-maps-mapael-advance.html"
                                           data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_advance">Advance
                                            Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="vector-maps-jvector.html"
                                   data-i18n="nav.maps.vector_maps.jvector_maps">jVector Map</a>
                            </li>
                            <li><a class="menu-item" href="vector-maps-jvq.html"
                                   data-i18n="nav.maps.vector_maps.vector_maps_jvq">JQV Map</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.support">Support</span><i class="la la-ellipsis-h ft-minus"
                                                                        data-toggle="tooltip"
                                                                        data-placement="right"
                                                                        data-original-title="Support"></i>
            </li>
            <li class=" nav-item"><a href="http://support.pixinvent.com/"><i class="la la-support"></i><span
                        class="menu-title" data-i18n="nav.support_raise_support.main">Raise Support</span></a>
            </li>
            <li class=" nav-item">
                <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"><i
                        class="la la-text-height"></i>
                    <span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</div>
