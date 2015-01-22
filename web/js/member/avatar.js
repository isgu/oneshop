/*修改头像*/

var swfu;
var numOfFiles=0;
var tokenName = $('#tokenName').val();
var token = $('#token').val();
var jcrop_api =null;
$(document).ready(function(){
	$('.btn-f').click(function(){
		if($('#hid_avatar').val()==''){
			//alert('头像没有改动');
			return false;
		}
		$('.resever').submit();
	});

    createSWFUpload('image','upload_avatar');
});

function createSWFUpload(type,placeholder) {
    var img = 'uppic.png';
    swfu = new SWFUpload({
        upload_url:HOME_URL+'info/doAjaxFileUpload',
        flash_url:BASE_URL+'js/swfupload/swfupload.swf',
        file_size_limit:'2MB',
        file_types:"*.jpg;*.gif;*.png;",
        file_post_name : "avatar",
        file_queue_limit:'1',
        post_params: {
            //'YII_CSRF_TOKEN' :token,
            //"PHPSESSID":"70f95a00382629b1409034b34f842ceb",
            'type':type
        },
        custom_settings : {
            'type':type
        },
        
        /* 按钮的设置 */
        button_image_url: BASE_URL+"/images/"+img, // Relative to the Flash file
        button_placeholder_id : placeholder,
        button_width: 130,
        button_height: 36,
        button_text_top_padding: 0,
        button_text_left_padding: 0,
        button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
        button_cursor: SWFUpload.CURSOR.HAND,
        button_action:SWFUpload.BUTTON_ACTION.SELECT_FILE,

        /* 选择完图片后执行。 */
        file_dialog_complete_handler:fileDialogComplete,
        /* 上传成功后执行。 */
        upload_success_handler:uploadSuccess,
        /* 主要是把图片加入队列 */
        //file_queued_handler:fileQueued,
        file_queue_error_handler : fileQueueError,
        
        debug:false
    });
}



/*
这个方法作用： 就是选择完图片后关闭时执行。
参数：numFilesQueued 就是先择图片的数量
*/
function fileDialogComplete(numFilesSelected, numFilesQueued) {
    var id = this.customSettings.type;
    if(numFilesQueued>0){
        try{
            $('div.picformat').find('.loading').show();
            this.startUpload();
        }
        catch(ex){
            this.debug(ex);
        }
    }
}

function uploadSuccess(file,serverData){
    var src = '';
	var imgname = '';
    var obj = '';

    $(".edt-div").css({'display':'block'});
    $(".resever").css({'display':'block'});

    try{
        obj = jQuery.parseJSON(serverData);
        console.log(obj);
        var id = this.customSettings.type;

		//alert(id);//image

        src = obj.img;

		//alert(src);//http://www.igao7.loc/uploads/avatar/temp/53d722a98e53c.jpg

        imgname =obj.name;
    }
    catch(e){
        src = serverData
    }

	if(obj.type=='error'){
		alert(obj.log);
	}else if(obj.type == 'image'){
        $('#hid_avatar').val(imgname);

        $('#cropbox').attr('src',src);
        $('#cropbox').attr('width',obj.size['w']);
        $('#cropbox').attr('height',obj.size['h']);

        if(jcrop_api!=null)
            jcrop_api.destroy();
        $('#cropbox').Jcrop({
            onChange: updatePreview,
            onSelect: updatePreview,
            aspectRatio: 1
        },function(){
            // Use the API to get the real image size
            var bounds = this.getBounds();
            boundx = bounds[0];
            boundy = bounds[1];
            // Store the API in the jcrop_api variable
            jcrop_api = this;
            jcrop_api.animateTo([0,0,100,100]);
          });
		  
        $('.pad_b20').slideDown();
        
    }
    
}

function fileQueueError(file, errorCode, message) {
    var id = this.customSettings.type;
    try {
        switch (errorCode) {
        case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
			alert('图片体积超过2M，请重新选择');
            //$('.i_ok').attr('style','display:none');
            //$('div.picformat').find('.i_error').html('图片体积超过2M，请重新选择').hide().fadeIn();
            break;
        case SWFUpload.QUEUE_ERROR.ZERO_BYTE_FILE:
            alert('图片大小不能为0，请重新选择');
			//$('.i_ok').attr('style','display:none');
            //$('div.picformat').find('.i_error').html('图片大小不能为0，请重新选择').hide().fadeIn();
            break;
        case SWFUpload.QUEUE_ERROR.INVALID_FILETYPE:
			alert('图片格式不正确，请重新选择');
            //$('.i_ok').attr('style','display:none');
            //$('div.picformat').find('.i_error').html('图片格式不正确，请重新选择').hide().fadeIn();
            break;
        }
    } catch (ex) {
        this.debug(ex);
    }
}

//剪切
function updateCoords(c)
{
    $('#x').val(c.x);
    $('#y').val(c.y);
    $('#w').val(c.w);
    $('#h').val(c.h);
};
function updatePreview(c)
{
    if (parseInt(c.w) > 0)
    {
      var rx = 100 / c.w;
      var ry = 100 / c.h;
      
      var rx3 = 50 / c.w;
      var ry3 = 50 / c.h;
      
      var rx5 = 25 / c.w;
      var ry5 = 25 / c.h;
    
      $('#preview').css({
        width: Math.round(rx * boundx) + 'px',
        height: Math.round(ry * boundy) + 'px',
        marginLeft: '-' + Math.round(rx * c.x) + 'px',
        marginTop: '-' + Math.round(ry * c.y) + 'px'
      });
      $('#preview1').css({
        width: Math.round(rx3 * boundx) + 'px',
        height: Math.round(ry3 * boundy) + 'px',
        marginLeft: '-' + Math.round(rx3 * c.x) + 'px',
        marginTop: '-' + Math.round(ry3 * c.y) + 'px'
      });
       $('#preview2').css({
        width: Math.round(rx5 * boundx) + 'px',
        height: Math.round(ry5 * boundy) + 'px',
        marginLeft: '-' + Math.round(rx5 * c.x) + 'px',
        marginTop: '-' + Math.round(ry5 * c.y) + 'px'
      });
    }
    
};