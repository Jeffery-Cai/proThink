		

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
<title>分配权限</title>

<!-- ! ~~~HEAD~~~ -->










		<link rel="stylesheet" href="__HPLUS__css/bootstrap.min14ed.css">
<link rel="stylesheet" href="__HPLUS__css/font-awesome.min93e3.css">
<link rel="stylesheet" href="__HPLUS__css/animate.min.css">
<link rel="stylesheet" href="__HPLUS__css/style.min862f.css">
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

						
<div class="col-sm-6">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5>分配菜单和访问权限
								<small></small>
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
							
													
			<form action="/admin/role/assignprivileges.html" class="form-horizontal" id="form1" method="post"  >
					
					
			<div class="form-group">
				<label class="col-sm-3 control-label">
					分配权限
				</label>
				<div class="col-sm-9">
									<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="1" name="privileges[]" >
							<i></i>
							区域联动 -- admin/area/getareabypid
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="2" name="privileges[]" >
							<i></i>
							主页 -- admin/index/index
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="3" name="privileges[]" >
							<i></i>
							用户管理 -- admin/user/none
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="4" name="privileges[]" >
							<i></i>
							分配角色 -- admin/user/assignroles
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="5" name="privileges[]" >
							<i></i>
							用户列表 -- admin/user/datalist
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="6" name="privileges[]" >
							<i></i>
							删除用户 -- admin/user/delete
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="7" name="privileges[]" >
							<i></i>
							编辑用户 -- admin/user/edit
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="8" name="privileges[]" checked>
							<i></i>
							修改密码 -- admin/user/editpwd
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="9" name="privileges[]" checked>
							<i></i>
							设置字段 -- admin/user/setfield
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="10" name="privileges[]" checked>
							<i></i>
							添加用户 -- admin/user/add
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="11" name="privileges[]" checked>
							<i></i>
							角色管理 -- admin/role/none
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="12" name="privileges[]" checked>
							<i></i>
							删除角色 -- admin/role/delete
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="13" name="privileges[]" checked>
							<i></i>
							角色授权 -- admin/role/assignprivileges
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="14" name="privileges[]" checked>
							<i></i>
							设置字段 -- admin/role/setfield
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="15" name="privileges[]" checked>
							<i></i>
							添加角色 -- admin/role/add
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="16" name="privileges[]" checked>
							<i></i>
							角色列表 -- admin/role/datalist
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="17" name="privileges[]" checked>
							<i></i>
							编辑角色 -- admin/role/edit
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="18" name="privileges[]" >
							<i></i>
							菜单管理 -- admin/resourcemenu/none
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="19" name="privileges[]" >
							<i></i>
							删除菜单 -- admin/resourcemenu/delete
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="20" name="privileges[]" >
							<i></i>
							编辑菜单 -- admin/resourcemenu/edit
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="21" name="privileges[]" >
							<i></i>
							设置字段 -- admin/resourcemenu/setfield
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="22" name="privileges[]" >
							<i></i>
							菜单列表 -- admin/resourcemenu/datalist
						</label>
				</div>				<div class="checkbox i-checks">
						<label> 
						<input type="checkbox" value="23" name="privileges[]" >
							<i></i>
							添加菜单 -- admin/resourcemenu/add
						</label>
				</div>
					<span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 每个角色可分配多个权限 <span class="error-tip"></span></span>
				</div>
			</div>




				
				
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
				let form1 = $("#form1");
				form1.submit(function () {

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

<!-- ! ~~~JS_INVOKE~~~ -->


		<!--					/script					-->
	</body>
</html>