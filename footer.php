</div>
<footer>
	<div class="container row">
		<div class="col-md-3">
			<a href="/" class="logo text-center">
				<img src="/assets/img/logo_white.png">
			</a>
		</div>
		<div class="col-md-5">
			<div class="header-menu">
				<ul>
					<li><a>Главная</a></li>
					<li><a>О компании</a></li>
					<li><a>Услуги и цены</a></li>
					<li><a>Акции</a></li>
					<li><a>Контакты</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-2">
			<div class="main-information text-center">
				<a href="tel:+79999999999">+7 (999) 999 99 99</a>
				<small>Звонок бесплатный по всей России</small>
			</div>
		</div>
		<div class="col-md-2 text-center ">
			<div class="zayavka">
				<button class="btn btn-primary" data-toggle="modal" data-target="#getConsultation"">
					Оставить заявку
				</button>
			</div>
		</div>
	</div>
</footer>
<div class="modal fade" id="getConsultation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			<div class="modal-body row">
				<div class="first-block col-lg-6 hidden-xs">
					<img src="/assets/img/modal_logo_white.png" class="modal-logo">
					<div class="top-list">
						<div class="top-item">
							Бесплатная консультация технолога
						</div>
						<div class="top-item">
							Бесплатная консультация по фото
						</div>
						<div class="top-item">
							Бесплатный вызов специалиста
						</div>
					</div>
				</div>
				<div class="second-block col-lg-6">
					<div class="modal-form-block">
						<div class="modal-title-form">Оставить заявку</div>
						<hr>
						<form class="modal-form">
							<span class="text">Свяжитесь с нами ПРЯМО СЕЙЧАС и мы перезвоним Вам в течение 15 минут! </span>
							<div class="form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Имя">
							</div>
							<div class="form-group">
								<input type="text" name="phone" class="form-control" id="phone" placeholder="Телефон">
							</div>
							<div class="form-group">
								<select class="select-list">
									<option value="gen" name="type" selected>Генеральная уборка</option>
									<option value="gen">Генеральная уборка</option>
									<option value="gen">Генеральная уборка</option>
									<option value="gen">Генеральная уборка</option>
									<option value="gen">Генеральная уборка</option>
								</select>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="comment" placeholder="Комментарий"></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-primary">ОТПРАВИТЬ</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

<script src="/assets/vendor/jquery-latest.js"></script>
<script src="/assets/vendor/bootstrap/bootstrap.bundle.js"></script>
<script src="/assets/js/script.js"></script>
</html>
