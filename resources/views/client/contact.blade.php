@extends('client.layout.master')
@section('content')
    <div class="breadcrumb-section bgc-offset mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ route('get.home') }}">Home</a>
                        <span class="breadcrumb-item active">Contact Us</span>
                    </nav>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <main id="content" class="main-content-wrapper page-about">

        <!-- Start of Contact Section -->
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div id="map_location" class="map-location">
                            <div id="map">
                                <div id="gmap-wrap">
                                    <div id="gmap" style="height: 474.6px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -130, -136);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="width: 24px; height: 24px; overflow: hidden; position: absolute; left: -12px; top: -24px; z-index: 0; animation-duration: 700ms; animation-iteration-count: infinite; animation-name: _gm7174;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -130, -136);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -130, -136);"><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i2606!3i6295!4i256!2m3!1e0!2sm!3i517232016!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U&amp;token=50801" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i2605!3i6295!4i256!2m3!1e0!2sm!3i517232016!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U&amp;token=33469" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i2606!3i6294!4i256!2m3!1e0!2sm!3i517232016!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U&amp;token=38711" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i2605!3i6294!4i256!2m3!1e0!2sm!3i517232016!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U&amp;token=21379" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i2605!3i6293!4i256!2m3!1e0!2sm!3i517232016!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U&amp;token=9289" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i2606!3i6293!4i256!2m3!1e0!2sm!3i517232016!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U&amp;token=26621" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i2607!3i6293!4i256!2m3!1e0!2sm!3i517232016!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U&amp;token=43953" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i2607!3i6294!4i256!2m3!1e0!2sm!3i517232016!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U&amp;token=56043" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i2607!3i6295!4i256!2m3!1e0!2sm!3i517232016!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2&amp;key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U&amp;token=68133" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div title="" style="width: 24px; height: 24px; overflow: hidden; position: absolute; opacity: 0; cursor: pointer; touch-action: none; left: -12px; top: -24px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=38.435828,-122.728091&amp;z=14&amp;hl=vi-VN&amp;gl=US&amp;mapclient=apiv3" title="Mở khu vực này trong Google Maps (mở cửa sổ mới)" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 120px; top: 147px;"><div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Dữ liệu Bản đồ</div><div style="font-size: 13px;">Dữ liệu bản đồ ©2020 Google</div><button draggable="false" title="Đóng" aria-label="Đóng" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 100px; bottom: 0px; width: 142px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Dữ liệu Bản đồ</a><span>Dữ liệu bản đồ ©2020 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dữ liệu bản đồ ©2020 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/vi-VN_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều khoản sử dụng</a></div></div><button draggable="false" title="Chuyển đổi chế độ xem toàn màn hình" aria-label="Chuyển đổi chế độ xem toàn màn hình" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google" href="https://www.google.com/maps/@38.435828,-122.728091,14z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Báo cáo một lỗi bản đồ</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; bottom: 95px; right: 40px;"><div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button draggable="false" title="Phóng to" aria-label="Phóng to" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Thu nhỏ" aria-label="Thu nhỏ" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button></div></div></div></div></div><div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;"><div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div><div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">Trang này không thể tải Google Maps đúng cách.</span></div><table style="width: 100%;"><tr><td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Bạn có sở hữu trang web này không?</a></td><td style="text-align: right;"><button class="dismissButton">OK</button></td></tr></table></div></div>
                                </div>
                            </div> <!-- end of #map -->
                        </div> <!-- end of #map_location -->
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="contact-form-wrapper">
                            <div class="section-title left-aligned">
                                <h2>get In Touch</h2>
                            </div>
                            <form id="contact-form" action="http://preview.hasthemes.com/pebona-v1/pebona/sendemail.php" method="post">
                                <div class="form-row">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <input type="text" name="name" class="form-control" id="com-name" placeholder="Your Name *" required="">
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <input type="email" name="email" class="form-control" id="com-email" placeholder="Your Email *" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                        <textarea id="comment" placeholder="Type Your Message....." name="message" class="form-control" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <button name="send_message" type="submit" class="btn btn-secondary">Send Your Message</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end of contact-form-wrapper -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- End of Contact Section -->

        <!-- Start of Info Section -->
        <section class="info-section pt-full pb-half bgc-offset">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="info-box">
                            <div class="info-icon">
                                <i class="ion ion-md-locate"></i>
                            </div>
                            <div class="info-content">
                                <h4>Our Location</h4>
                                <p>123 North Avenue, Santa Rosa</p>
                                <p>California</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="info-box">
                            <div class="info-icon">
                                <i class="ion ion-ios-call"></i>
                            </div>
                            <div class="info-content">
                                <h4>Contact Us Anytime</h4>
                                <p>Mobile: <a href="#">(+1) 800 555 888</a></p>
                                <p>Fax: (+1) 800 666 999</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="info-box">
                            <div class="info-icon">
                                <i class="ion ion-md-mail-open"></i>
                            </div>
                            <div class="info-content">
                                <h4>Write Some Words</h4>
                                <p><a href="#">support24/7@example.com</a></p>
                                <p><a href="#">contact@example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- End of Info Section -->

        <!-- Start of Client Section -->
        <div class="client-section mb-full">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="clients element-carousel instance-0 swiper-container-horizontal" data-visible-slide="5" data-visible-xl-slide="5" data-visible-lg-slide="5" data-visible-md-slide="4" data-visible-sm-slide="3" data-visible-xs-slide="2" data-loop="true" data-autoplay-delay="3000" data-space-between="0" data-effect="slide">

                            <!-- Slides -->
                            <div class="swiper-wrapper" style="transform: translate3d(-2415.6px, 0px, 0px); transition-duration: 0ms;"><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-1.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-2.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-3.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-4.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="4" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-5.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-6.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-7.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-8.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide" data-swiper-slide-index="0" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-1.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide" data-swiper-slide-index="1" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-2.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide swiper-slide-visible swiper-slide-prev" data-swiper-slide-index="2" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-3.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="3" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-4.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide swiper-slide-visible swiper-slide-next" data-swiper-slide-index="4" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-5.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide swiper-slide-visible" data-swiper-slide-index="5" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-6.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide swiper-slide-visible" data-swiper-slide-index="6" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-7.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide swiper-slide-visible" data-swiper-slide-index="7" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-8.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-1.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-2.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-3.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-4.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="4" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-5.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-6.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-7.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-8.jpg" alt="Client Logo">
                                </div></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div> <!-- end of element-carousel -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Client Section -->

        <!-- Start of Newsletter Section -->
        <section class="newsletter-section vpadding bgc-offset mb0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                        <div class="newsletter-title d-lg-flex justify-content-lg-start">
                            <h6>Subscribe to our Newsletter</h6>
                            <h3>Subscribe to our newsletter and know first about all the promotions and discounts. Be always trendy.</h3>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="newsletter-form-wrapper">
                            <form class="mc-subscribe-form" novalidate="true">
                                <input type="email" autocomplete="off" placeholder="Enter you email address here..." required="" name="EMAIL">
                                <input type="submit" class="default-btn" value="Subscribe">
                            </form>

                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div>
                                <div class="mailchimp-success"></div>
                                <div class="mailchimp-error"></div>
                            </div><!-- end of mailchimp-alerts -->
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- End of Newsletter Section -->
    </main>
@stop
