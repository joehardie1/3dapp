// JavaScript Document
$(document).ready(function(){

    $.getJSON('../data.json', function(jsonObj) {
       $('#title').html('<h2>' + jsonObj.pageTextData[0].title + '<h2>');
       $('#main_image').html('<p>' + jsonObj.pageTextData[0].description + '</p>');
       
       $('#title_left').html('<h2>' + jsonObj.pageTextData[1].title + '<h2>');
       $('#description_left').html('<p>' + jsonObj.pageTextData[1].description + '</p>');	

       $('#title_centre').html('<h2>' + jsonObj.pageTextData[2].title + '<h2>');
       $('#description_centre').html('<p>' + jsonObj.pageTextData[2].description + '</p>');	

       $('#title_right').html('<h2>' + jsonObj.pageTextData[3].title + '<h2>');
       $('#description_right').html('<p>' + jsonObj.pageTextData[3].description + '</p>');			

       $('.title_gallery').html('<h2>' + jsonObj.pageTextData[4].galleryTitle + '<h2>');
       $('.description_gallery').html('<p>' + jsonObj.pageTextData[4].galleryDescription + '</p>');

       $('.x3dCameraTitle').html('<h2>' + jsonObj.pageTextData[5].CameraTitle + '<h2>');
       $('.x3dCameraDescription').html('<p>' + jsonObj.pageTextData[5].CameraDescription + '</p>');

       $('.x3dAnimationtitle').html('<h2>' + jsonObj.pageTextData[6].AnimationTitle + '<h2>');
       $('.x3dAnimationDescription').html('<p>' + jsonObj.pageTextData[6].AnimationDescription + '</p>');

       $('.x3dRenderTitle').html('<h2>' + jsonObj.pageTextData[7].RenderTitle + '<h2>');
       $('.x3dRenderDescription').html('<p>' + jsonObj.pageTextData[7].RenderDescription + '</p>');
    });
});







