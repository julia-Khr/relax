<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('/admin/plugins/fontawesome-free/css/all.min.css"')}}>
<!-- Ionicons -->
<link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{asset('/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{asset('/admin/plugins/jqvmap/jqvmap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('/admin/dist/css/adminlte.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('/admin/plugins/daterangepicker/daterangepicker.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{asset('/admin/plugins/summernote/summernote-bs4.min.css')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<style>
    footer{
        position: relative;
        height: 360px;
        background-color: #177E1C;
    }


/*Clearing Floats*/
.cf:before, .cf:after{
    content:"";
    display:table;
}

.cf:after{
    clear:both;
}

.cf{
    zoom:1;
}
/* Form wrapper styling */

.search-wrapper {
    width: 450px;
    border-radius: 40px;
    background-color: white;
}

/* Form text input */

.search-wrapper input {
    width: 330px;
    height: 40px;
    padding: 10px 30px;
    float: left;
    border: 0;
    background: #fff;
    border-radius: 40px;
    border-top-style: none;
}

.search-wrapper input:focus {
    outline: 0;
    background: #fff;
    box-shadow: 0 0 2px rgba(0,0,0,0.8) inset;
}

.search-wrapper input::-webkit-input-placeholder {
    font-weight: normal;
    font-style: italic;
    padding-left: 20px;
}

.search-wrapper input:-moz-placeholder {
    font-weight: normal;
    font-style: italic;
}

.search-wrapper input:-ms-input-placeholder {
    font-weight: normal;
    font-style: italic;
    border-style: none;
}

/* Form submit button */
.search-wrapper button {
    overflow: visible;
    position: relative;
    float: right;
    border: 0;
    padding: 0;
    cursor: pointer;
    height: 40px;
    width: 110px;
    font: 13px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
    color: #fff;
    background: #FF931ECC;
    border-radius: 40px;
}

.search-wrapper button:hover{
/*     background: #e54040; */
}

.search-wrapper button:active,
.search-wrapper button:focus{
    background: #198cff;
    outline: 0;
}

.search-wrapper button:focus:before,
.search-wrapper button:active:before{
        border-right-color: #c42f2f;
}

.search-wrapper button::-moz-focus-inner { /* remove extra button spacing for Mozilla Firefox */
    border: 0;
    padding: 0;
}

</style>
