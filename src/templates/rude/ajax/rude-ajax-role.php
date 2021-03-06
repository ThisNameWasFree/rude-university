<?

namespace rude;

class ajax_role
{
	public static function has_access()
	{
		$allow_role_management = get(RUDE_FIELD_ALLOW_ROLE_MANAGEMENT, $_SESSION);

		return $allow_role_management === '1';
	}

	public static function add()
	{
		if (!ajax_role::has_access())
		{
			die();
		}

		$role = get(RUDE_FIELD_ROLE);
		$allow_user_management = get(RUDE_FIELD_ALLOW_USER_MANAGEMENT);
		$allow_role_management = get(RUDE_FIELD_ALLOW_ROLE_MANAGEMENT);

		if ($role === false)
		{
			return false;
		}


		$role_id = roles::add($role, $allow_user_management, $allow_role_management);

		return $role_id;
	}

	public static function delete()
	{
		if (!ajax_role::has_access())
		{
			die();
		}

		$role_id = get(RUDE_FIELD_ROLE_ID);

		$user_role_id = roles::get_id(get(RUDE_FIELD_ROLE, $_SESSION));

		if ($role_id === $user_role_id)
		{
			die();
		}

		roles::delete($role_id);
	}

	public static function html_form_add()
	{
		if (!ajax_user::has_access())
		{
			die();
		}

		?>
		<html>
		<? require_once(RUDE_TEMPLATE_DIR . '/rude-header.php') ?>

		<body class="ajax_bg">
		<div>
			<h1>Добавление роли</h1>
			<p>Форма для добавления новых ролей</p>
			<form id="form" name="form" method="post" class="ui form" action="index.php?task=<?= RUDE_TASK_AJAX_ROLE_ADD_FORM ?>">
				<div class="field">
					<label>Роль</label>
					<div class="ui left labeled icon input">
						<input id="<?=RUDE_FIELD_ROLE?>" name="<?=RUDE_FIELD_ROLE?>" type="text" placeholder="Роль">
						<i class="user icon"></i>
						<div class="ui corner label">
							<i class="icon asterisk"></i>
						</div>
					</div>
				</div>

				<div class="inline field">
					<div class="ui checkbox">
						<input id="<?=RUDE_FIELD_ALLOW_USER_MANAGEMENT?>" name="<?=RUDE_FIELD_ALLOW_USER_MANAGEMENT?>"  type="checkbox">
						<label>Управление пользователями</label>
					</div>
				</div>

				<div class="inline field">
					<div class="ui checkbox">
						<input id="<?=RUDE_FIELD_ALLOW_ROLE_MANAGEMENT?>" name="<?=RUDE_FIELD_ALLOW_ROLE_MANAGEMENT?>"  type="checkbox">
						<label>Управление ролями</label>
					</div>
				</div>



				<div id="submit" class="ui blue submit button">Добавить</div>
			</form>
		</div>
		<script>
			$('.ui.checkbox')
				.checkbox()
			;
			$('.ui.form').form(
				{
					role:
					{
						identifier: 'role',

						rules:
							[{
								type: 'empty',
								prompt: 'Пожалуйста, введите наименование факультета'
							}]
					}
				});

			$(".form").submit(function (event) {

				event.preventDefault();

				var role = $('#' + '<?= RUDE_FIELD_ROLE ?>').val();
				var allow_user_management = 0;
				var allow_role_management = 0;

				if (role)
				{
					if ($('#' + '<?= RUDE_FIELD_ALLOW_USER_MANAGEMENT ?>').is(':checked')) { allow_user_management = 1; }
					if ($('#' + '<?= RUDE_FIELD_ALLOW_ROLE_MANAGEMENT ?>').is(':checked')) { allow_role_management = 1; }
				}
				if (!role) {return true;}

				$.ajax({
					type: 'POST',
					url: 'index.php',
					data: {
						task:     '<?= RUDE_TASK_AJAX ?>',
						target:   '<?= RUDE_TASK_AJAX_ROLE_ADD ?>',

						role:                  role,
						allow_user_management: allow_user_management,
						allow_role_management: allow_role_management
					},

					success: function(data)
					{
						parent.$.fancybox.close();
					}
				});
				return true;
			});
		</script>


		</body>

		</html>
	<?
	}

	public static function html_form_add1()
	{
		if (!ajax_role::has_access())
		{
			die();
		}

		?>
		<html>
		<? require_once(RUDE_TEMPLATE_DIR . '/rude-header.php') ?>

		<body>
		<div id="stylized" class="myform">
			<form id="form" name="form" method="post" action="index.php?task=<?= RUDE_TASK_ROLE_ADD ?>">
				<h1>Добавление роли</h1>
				<p>Форма для добавления новых ролей</p>


				<?= html::input(RUDE_FIELD_ROLE, 'Роль'); ?>

				<div class="checkbox-item">
					<?= html::checkbox(RUDE_FIELD_ALLOW_USER_MANAGEMENT, 'Управление пользователями'); ?>
				</div>
				<div class="checkbox-item">
					<?= html::checkbox(RUDE_FIELD_ALLOW_ROLE_MANAGEMENT, 'Управление ролями'); ?>
				</div>

				<div class="clear"></div>

				<div id="error-box"></div>

				<?= html::button(RUDE_TEXT_ADD, 'validate(); return false;'); ?>
			</form>


			<script>
				function validate()
				{
					var role = $('#' + '<?= RUDE_FIELD_ROLE ?>').val();
					var allow_user_management = 0;
					var allow_role_management = 0;

					if (role)
					{
						if ($('#' + '<?= RUDE_FIELD_ALLOW_USER_MANAGEMENT ?>').is(':checked')) { allow_user_management = 1; }
						if ($('#' + '<?= RUDE_FIELD_ALLOW_ROLE_MANAGEMENT ?>').is(':checked')) { allow_role_management = 1; }

						add_role(role, allow_user_management, allow_role_management);
					}


					var log = '<pre>';

					if (!role)
					{
						log += '> Введите название роли' + '<br />';
					}

					log += '</pre>';


					errors(log);
				}

				function errors(log)
				{
					rude_animation('#error-box', log);
				}

				function add_role(role, allow_user_management, allow_role_management)
				{
					$.ajax({
						type: 'POST',
						url: 'index.php',
						data: {
							task:     '<?= RUDE_TASK_AJAX ?>',
							target:   '<?= RUDE_TASK_AJAX_ROLE_ADD ?>',

							role:                  role,
							allow_user_management: allow_user_management,
							allow_role_management: allow_role_management
						},

						success: function(data)
						{
							parent.$.fancybox.close();
						}
					});
				}
			</script>
		</div>
		</body>

		</html>
	<?
	}

	public static function html_form_delete()
	{
		if (!ajax_role::has_access())
		{
			die();
		}

		$role = get(RUDE_FIELD_ROLE);

		if ($role === get(RUDE_FIELD_ROLE, $_SESSION))
		{
			die();
		}

		$role_id = roles::get_id($role);




		?>
		<html>
		<? require_once(RUDE_TEMPLATE_DIR . '/rude-header.php') ?>

		<body class="ajax_bg">
		<div>
			<h1>Удаление роли</h1>
			<p class="red">Внимание! Данная операция необратима!</p>
			<form id="form" name="form" method="post" class="ui form" action="index.php?task=<?= RUDE_TASK_AJAX_ROLE_DELETE_FORM ?>">
				Вы точно уверены, что хотите удалить роль <b>"<?= $role ?></b>"?
				<div class="button-box">
					<button class="ui blue submit button"  type="submit" onclick="delete_role('<?= $role_id ?>'); parent.$.fancybox.close();">Да</button>
					<button style="float: right !important;" class="ui blue submit button"  type="submit" onclick="parent.$.fancybox.close();">Нет</button>
				</div>
			</form>
		</div>
		<script>
			function delete_role(role_id)
			{
				$.ajax({
					type: 'POST',
					url: 'index.php',
					data: {
						task:     '<?= RUDE_TASK_AJAX ?>',
						target:   '<?= RUDE_TASK_AJAX_ROLE_DELETE ?>',
						role_id: '<?= $role_id ?>'
					},

					success: function(data)
					{
						parent.$.fancybox.close();
					}
				});
			}
		</script>


		</body>

		</html>
	<?
	}

	public static function html()
	{
		?>
		<table class="ui collapsing table segment full-width">
			<thead class="small-font">
				<th>#</th>
				<th>Название</th>
				<th>Пользователей</th>
				<th>Управление пользователями</th>
				<th>Управление ролями</th>
				<th>Действия</th>
			</thead>

			<?
			$role_list = roles::count();

			foreach ($role_list as $role)
			{
				?>
				<tr>
					<td><?= $role->{RUDE_FIELD_ID} ?></td>
					<td><?= $role->{RUDE_FIELD_ROLE} ?></td>
					<td><?= $role->{RUDE_FIELD_COUNT} ?></td>
					<td>
						<?
							if ($role->{RUDE_FIELD_ALLOW_USER_MANAGEMENT})
							{
								echo RUDE_TEXT_YES;
							}
							else
							{
								echo RUDE_TEXT_NO;
							}
						?>
					</td>
					<td>
						<?
						if ($role->{RUDE_FIELD_ALLOW_ROLE_MANAGEMENT})
						{
							echo RUDE_TEXT_YES;
						}
						else
						{
							echo RUDE_TEXT_NO;
						}
						?>
					</td>

					<td>
					<? if ($role->role !== get(RUDE_FIELD_ROLE, $_SESSION)) : ?>
						<a href="<?= url::ajax(RUDE_TASK_AJAX_ROLE_DELETE_FORM) . url::param(RUDE_FIELD_ROLE, $role->role) ?>" class="fancybox-roles-small"><img src="src/icons/remove.png" class="small-padding" title="<?= RUDE_TEXT_DELETE_SELECTED ?>" /></a>
					<? endif; ?>
					</td>
				</tr>
			<?
			}
			?>
		</table>
	<?
	}
}