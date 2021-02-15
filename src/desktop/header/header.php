<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Djiant </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<link rel="stylesheet" type="text/css" href="assets/global/css/toastr.css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<link href="https://explorer.djiant.com/assets/global/plugins/racine/racine.css" rel="stylesheet" type="text/css"/> 
<!-- BEGIN PAGE STYLES -->
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="icon" type="image/png" href="assets/image/logo-djiant.svg" />
      <script type="text/javascript">
    $(window).on('load',function(){
        $('#Djiant-popup').modal('show');
    });
</script>

<style>
.noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome and Opera */
}
.djiant-col-md-1, .djiant-col-md-10, .djiant-col-md-11, .djiant-col-md-12, .djiant-col-md-2, .djiant-col-md-3, .djiant-col-md-4, .djiant-col-md-5, .djiant-col-md-6, .djiant-col-md-7, .djiant-col-md-8, .djiant-col-md-9 {
    float: left;
}
.djiant-col-md-1,.djiant-col-md-2,.djiant-col-md-3,
.djiant-col-md-4,.djiant-col-md-6,.djiant-col-md-7
,.djiant-col-md-8,.djiant-col-md-9,.djiant-col-md-10,
.djiant-col-md-11.djiant-col-md-12{
    position: relative;
    min-height: 1px;
    padding-right: 7px;
    padding-left: 8px;
}
.djiant-col-md-1{
   max-width: 100x;
   width: 100px;
  }
.djiant-col-md-2{
   max-width: 300px;
   width: 230px;

  }

.djiant-col-md-3{
   max-width: 345px;
   width: 345px;
  }
.djiant-col-md-4{
   max-width: 460px;
   width: 460px;
  }
.djiant-col-md-5{
   max-width: 575px;
   width: 575px;
  }
.djiant-col-md-6{
    max-width: 690px;
    width: 690px;
  }
.djiant-col-md-7{
    max-width: 805px;
    width: 805px;
  }
.djiant-col-md-8{
    max-width: 951px;
    width: 951px;
  }
.djiant-col-md-9{
    max-width: 1035px;
    width: 1035px;
  }
.djiant-col-md-10{
    max-width: 1200px;
    width: 1200px;
  }
.bottom-left {
position: absolute;
    bottom: 0;
    /* left: 0; */
    margin-left: 15px;
    width: 531.8px;
    height: 115px;
    padding: 7px 0px 10px 20px;
    background-color: #60530099;
}
.djiant-list{
  padding-left: 20px;
  font-weight: 100;
  padding-bottom: 10px;
}
.djiant-title{
  font-size: 25px; 
  margin-top: 0px; 
  font-family: arial black; 
  margin-bottom: 3px;
}
.contact-us
{

  background-color: #008DD2;
  border-radius:4px !important;
  padding:  25px 30px;
  font-size: 20px;
  min-height:50px;
  position:fixed;
  right:10px;
  top: 40%;
  color:#FFF;
  cursor: pointer;
}
#tab_1_content,#tab_3_content{
display: none;
}
.portlet-light{
  margin-top: 20px;
  margin-left: 15px;
}
.popupInfo-body {
    margin: 0px 15px 0px 14px;
}
.active-network{
     border: 0.1px solid #ddddddab;
}
.disabled-network  {
  opacity: 0.3;
}
.active-network:hover {
   box-shadow: 0px 0px 6px 0px rgb(0 0 0 / 22%);
   cursor: pointer;
}
.main-network:hover {
   box-shadow: 0px 0px 6px 0px rgb(0 0 0 / 22%);
   cursor: pointer;
}
.domaine-list-disabled{
    font-size: 14px;
    padding: 4px;
    cursor: pointer;
    margin-bottom: 1px;

}
.main-network {
  margin-top:0px;
  margin-left:0px;


}

.djiant-link{
color: #383838;

}
.djiant-block-nothoverd{
   padding: 8px 0px 8px 1px; 
}
.djiant-block-hoverd{
  padding: 8px 0px 8px 1px;
}
.djiant-block-hoverd:hover{
  background-color: #f3f3f3;
  border-radius: 2px !important;
}
.disabled-network  img {
}
.active-network p{
  font-family: calibri; 
  font-weight: 100; 
  font-size: 12px;
}
.disabled-network p{
  font-family: calibri; 
  font-weight: 100; 
  font-size: 12px;
}
.scrollable {
    height: auto;
    max-height: 800px;
    overflow-x: hidden;
}
.decouvrez-djiant {
    font-family: calibri;
    font-size: 25px;
    margin-top: 0px;
    margin-bottom: 0px;
    line-height: initial;
    font-weight: 100;
}
.djiant-block-4 {
    font-family: calibri;
    font-size: 14px !important;
    margin-bottom: 0px;
    margin-top: 2px;
    line-height: initial;
    font-weight: 100;
    color:#808080;/*ajouté par wissem*/
}
.djiant-block {
    font-family: calibri;
    font-size: 14px !important;
    margin-bottom: 0px;
    margin-top: 0px;
    line-height: initial;
    font-weight: 100;
}
.list-langue{
  color: #a7a7a7;
  margin-left: 8px;
  margin-right: 8px;
}

.active-langue{
  color: #383838;
  font-weight: bold;
}
.menu-footer{
    color: #383838;
  margin-left: 8px;
  margin-right: 8px;
  font-size: 14px;
}
.the-web{
  font-weight: 100;
  color: #727271;
  font-size: 13px;
  margin-left: 5px;
}
li.disabled a{
color: #cccccc !important;
}
.Popular-networks,.All-networks{
  -webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  user-select: none;
  font-size: 14px;
  font-weight: 600;
}

/* width */
::-webkit-scrollbar {
  width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f2f2f2; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #e3e3e3;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #e3e3e3; 
}

.titre-4{
  margin-bottom: 0px;
  font-size: 15px;
}


.selected {
    text-decoration: none;
    background-color: #008DD2;
    border-radius: 4px !important;
    /* border: 1px solid #fff; */
}
.selected > .caption{
color: #FFF ;
}
.selected > .caption:hover{
color: #333 ;
}
 
.alert-black{
  background-color: #383838;
  margin-top: 25px;
  margin-left: 25px;
  margin-bottom: 0px;
  margin-right: 57px;
  color: #FFF;
}
.icon {
  display: inline-block;
}
.icon  img{
  width: 100%;
}

.contact{
  border-radius: 2px !important ;
}



</style>



</head>