		

<!doctype html>
<html lang="en">
	<head>

		<!--					head					-->

		<meta charset="utf-8">
<!--[if lt IE 9]><meta http-equiv="refresh" content="0;ie.html" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta  name="viewport"  content="width=device-width"  >
<meta  name="keywords"  content=""  >
<meta  name="description"  content=""  >
<meta name="renderer" content="webkit" >
<title>上传测试</title>

<!-- ! ~~~HEAD~~~ -->










		<link rel="stylesheet" href="__HPLUS__css/bootstrap.min14ed.css">
<link rel="stylesheet" href="__HPLUS__css/font-awesome.min93e3.css">
<link rel="stylesheet" href="__HPLUS__css/animate.min.css">
<link rel="stylesheet" href="__HPLUS__css/style.min862f.css">
<link rel="stylesheet" href="__STATIC__/css/custom.css">
<link rel="stylesheet" href="__HPLUS__css/plugins/switchery/switchery.css">
<link rel="stylesheet" href="__PLUGINS__webuploader/css/webuploader.css">
<link rel="stylesheet" href="__PLUGINS__webuploader/examples/multi-image-upload/style.css">
<link rel="stylesheet" href="__HPLUS__css/plugins/iCheck/custom.css">
			<style>  
			
			</style>  
			<style>  
			.error-tip {
				color       : #f00;
				font-weight : bold;
			}

			label.valid {
				color : #58c75d;
			}	
			</style>  
			<style>  
				
			</style>  
			<style>  
			</style>  

<!-- ! ~~~CSS~~~ -->






		<script src="__HPLUS__js/jquery.min.js"></script>
<script src="__HPLUS__js/bootstrap.min.js"></script>
<script src="__HPLUS__js/content.min.js"></script>
<script src="__HPLUS__js/plugins/layer/layer.js"></script>
<script src="__HPLUS__js/plugins/switchery/switchery.js"></script>
<script src="__STATIC__/js/form.js"></script>
<script src="__HPLUS__js/plugins/iCheck/icheck.min.js"></script>
<script src="__HPLUS__js/plugins/validate/jquery.validate.min.js"></script>

<!-- ! ~~~JS_LIB~~~ -->



		<!--					/head					-->

	</head>
	<body   class=" gray-bg" >

		<!--					body					-->
					
		<div class="wrapper wrapper-content animated fadeInRight   ">

				
			
			<div class="row"  >

						
<div class="col-sm-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>大标题
								<small>小标题</small>
							</h5>
							<div class="ibox-tools">
							
							
								<a class="collapse-link">
									<i class="fa fa-chevron-up"></i>
								</a>
								
								
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="fa fa-wrench"></i>
								</a>
								
								
								<ul class="dropdown-menu dropdown-user">
								
							<!--	
									<li>
										<a href="graph_morris.html#">选项1</a>
									</li>
									<li>
										<a href="graph_morris.html#">选项2</a>
									</li>
									
							-->
									<!-- ~~~option~~~ -->
								</ul>
								
								<!-- ~~~isEnableClosed~~~ -->
								<!--	
									<a class="close-link">
										<i class="fa fa-times"></i>
									</a>
								-->
								
							</div>
						</div>
						<div class="ibox-content" style="position: relative">
							
													
			<form action="/home/index/api.html" class="form-horizontal" id="form122222" method="post"  >
					
							

			<div class="form-group">
				<label class="col-sm-3 control-label">staticText</label>
				<div class="col-sm-8">
					<p class="form-control-static">value</p>
				</div>
			</div>



<input type="hidden"  id="upload-files"  name="files"  value="" >


			<div class="form-group">
				<label class="col-sm-3 control-label">内容</label>
				<div class="col-sm-8">
					<textarea id="editor" type="text/plain" style="width:100%;height:350px;" name="uediter">sdfsdfsdfsdf</textarea>
				</div>
			</div>



							<div class="page-container">

								<p style="font-weight: bold;color: #f00;">111</p><p >sdfsdfs1</p><p >sdfsdfs2</p><p >sdfsdfs3</p><br><p style="font-weight: bold;color: #f00;">222</p><p >sdfsdfs12</p><p >sdfsdfs22</p><p >sdfsdfs32</p><br>

								<div id="uploader" class="wu-example">
									<div class="queueList">
										<div id="dndArea" class="placeholder">
											<div id="filePicker"></div>
											<p>或将照片拖到这里，单次最多可选300张</p>
										</div>
									</div>
									<div class="statusBar" style="display:none;">
										<div class="progress">
											<span class="text">0%</span>
											<span class="percentage"></span>
										</div>
										<div class="info"></div>
										<div class="btns">
											<div id="filePicker2"></div>
											<div class="uploadBtn">开始上传</div>
										</div>
									</div>
								</div>
							</div>
	
							<script>
								window.uploaderEventMap = {
									beforeFileQueued : function (file) {
	var subject = $.trim(file.name);
	console.dir(subject + 123456)
} ,uploadSuccess : function (file, response) {
	//等于2或1
	if (response.sign)
	{
		if (response.is_finished == 1)
		{
			console.dir(response)

			window.upload_file.push({
				"savename":response.savename,
			});
			
			$(".uploader-preview").find('img').attr({
				'src':response['thumb_url'],
			});
			$(".status-box-text").text('上传完成');
		}
		else
		{
		}
	}
	else
	{
		//服务器处理出错
	}
} ,uploadFinished : function () {
	$('#upload-files').val( btoa(JSON.stringify(window.upload_file)));
	layer.msg('处理完成111111111');
} ,
								};
								window.uploaderOptionMap = {
									server : '/home/index/upload.html' ,
								};
					
							</script>
							<!--/单图片dom结构部分-->




				
				
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-3">
							<button class="btn btn-primary" type="submit">提交</button>
							<!--<button class="btn btn-info reset" type="reset">重写填写</button>-->
						</div>
					</div>
			</form>



							
						</div>
					</div>
				</div>




			</div>



		</div>


<!-- ! ~~~BODY~~~ -->


		<!--					/body					-->


		<!--					script					-->
		
			<script>  
			
			</script>  
			
			
			
<!--  ueditor-->
		<script type="text/javascript" charset="utf-8" src="__PLUGINS__uediter/ueditor.config.js"></script>
		<script type="text/javascript" charset="utf-8" src="__PLUGINS__uediter/ueditor.all.min.js"></script>
		<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
		<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
		<script type="text/javascript" charset="utf-8" src="__PLUGINS__plugins/uediter/lang/zh-cn/zh-cn.js"></script>
		<script>
			$(document).ready(function () {var ue = UE.getEditor('editor');});
		</script>
<!--  /ueditor-->






	
		
		<!--  icheck--> 
			<script>  
				$(document).ready(function () {
					$(".i-checks").iCheck({
						checkboxClass: "icheckbox_square-green",
						radioClass   : "iradio_square-green",
					})
				});
			</script>  
		<!--  /icheck-->
						
						
						
						
		<script>  
				let form122222 = $("#form122222");
				form122222.submit(function () {

				var _this = $(this);
					//_this.find('button:submit').attr("disabled",true);
					var loadIndex = layer.load()
					$(this).ajaxSubmit({
						//把服务器返回的内容放入id为output的元素中
						target: '#output',

						//提交前的回调函数
						beforeSubmit: function (formData, jqForm, options) {
							 console.dir(formData)
							 console.dir(jqForm)
							 console.dir(options)

							//formData: 数组对象，提交表单时，Form插件会以Ajax方式自动提交这些数据，格式如：[{name:user,value:val },{name:pwd,value:pwd}]
							//jqForm:   jQuery对象，封装了表单的元素
							//options:  options对象

							// var queryString = $.param(formData);   //name=1&address=2
							// var formElement = jqForm[0];              //将jqForm转换为DOM对象
							// var address = formElement.address.value;  //访问jqForm的DOM元素

							//只要不返回false，表单都会提交,在这里可以对表单元素进行验证
							return true;
						},

						//提交后的回调函数
						success: successFunc = function (responseText, statusText) {
							_this.find('button:submit').attr("disabled",false);
							layer.close(loadIndex);
							layer.msg(responseText.msg)
							console.dir(responseText)
							console.dir(statusText)
						},

						// 默认是form的action， 如果申明，则会覆盖
						//url: url,

						// 默认是form的method（get or post），如果申明，则会覆盖
						//type: type,

						// html(默认), xml, script, json...接受服务端返回的类型
						dataType: 'json',

						// 成功提交后，清除所有表单元素的值
						//clearForm: true,

						// 成功提交后，重置所有表单元素的值
						//resetForm: true,

						//限制请求的时间，当请求大于3秒后，跳出请求
						timeout: 3000
					});
					return false;
				})



			</script>  
			<script>  
					
			</script>  
			<script>  
				
			</script>  

<!-- ! ~~~SCRIPT~~~ -->









		<script src="__STATIC__/js/custom.js"></script>
<script src="__PLUGINS__webuploader/dist/webuploader.min.js"></script>
<script src="__PLUGINS__webuploader/examples/multi-image-upload/upload.js"></script>

<!-- ! ~~~JS_INVOKE~~~ -->


		<!--					/script					-->
	</body>
</html>