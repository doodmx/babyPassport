!function(e){var t={};function i(a){if(t[a])return t[a].exports;var n=t[a]={i:a,l:!1,exports:{}};return e[a].call(n.exports,n,n.exports,i),n.l=!0,n.exports}i.m=e,i.c=t,i.d=function(e,t,a){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:a})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var a=Object.create(null);if(i.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)i.d(a,n,function(t){return e[t]}.bind(null,n));return a},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="/",i(i.s=17)}({17:function(e,t,i){e.exports=i("Oxjo")},Oxjo:function(e,t){$(document).ready(function(){$.initFileInput("#image",["jpg","jpeg","bmp","gif","bmp","svg","png"],"es"),$.initFileInput("#bg_image",["jpg","jpeg","bmp","gif","bmp","svg","png"],"es");var e=$("#dataTableBuilder").DataTable();function t(t,i){$.simpleAjax({crud:"Ciudades",type:"GET",url:$("#DATA").data("url")+"/cities/setStatus/".concat(t,"/").concat(i),form:"",loadingSelector:".panel",successCallback:function(t){e.ajax.reload()},errorCallback:function(e){}})}$("#cityForm").parsley(),$(document).on("click","#openCityModal",function(){return document.getElementById("cityForm").reset(),$("#id").val(""),$("#cityForm").data("action","create"),$("#modalTitle").text("Nueva Ciudad"),$("#cityModal").modal("show"),!1}),$(document).on("click",".editCity",function(){var t=$(this).data("city"),i=$(this).data("copy"),a=$(this).data("id"),n=$(this).data("image"),r=$(this).data("bg_image");return $("#cityForm").data("action","edit"),$("#cityModal").modal("show"),$("#id").val(a),$("input[name='city']").val(t),$("textarea[name='copy']").val(i),$("#modalTitle").text("Editar Ciudad"),null!=n&&$.previewsFileInput("#image",["jpg","jpeg","bmp","gif","bmp","svg","png"],"es",["<img src='"+n+"' class='file-preview-image' style='width: 100%;height: inherit;' alt='Desert' title='Desert'>"],[{type:"image",caption:t,size:817e3,url:$("#DATA").data("url")+"/cities/"+a+"/deleteImage/image",key:1}],e),null!=r&&$.previewsFileInput("#bg_image",["jpg","jpeg","bmp","gif","bmp","svg","png"],"es",["<img src='"+r+"' class='file-preview-image' style='width: 100%;height: inherit;' alt='Desert' title='Desert'>"],[{type:"image",caption:t,size:817e3,url:$("#DATA").data("url")+"/cities/"+a+"/deleteImage/bg_image",key:1}],e),!1}),$(document).on("click","#activateCity",function(){return confirm("¿Está seguro(a) de activar la ciudad?")&&t($(this).data("id"),1),!1}),$(document).on("click","#deactivateCity",function(){return confirm("¿Está seguro(a) de desactivar la ciudad ?")&&t($(this).data("id"),0),!1}),$("#cityForm").on("submit",function(t){return t.preventDefault(),$("#cityForm").parsley().isValid()&&function(){$("input[name='_method']").val("create"==$("#cityForm").data("action")?"POST":"PATCH");var t=$("#DATA").data("url")+"/cities";$.formDataAjax({modalTitle:"Ciudades",type:"POST",url:"create"==$("#cityForm").data("action")?t:t+"/"+$("#id").val(),form:"cityForm",loadingSelector:"#cityModal .modal-content",successCallback:function(t){e.ajax.reload(),$("#cityModal").modal("hide"),$(".file-preview-thumbnails").html("")},errorCallback:function(e){}})}(),!1})})}});