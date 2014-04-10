<?

namespace rude;

require_once 'rude-report-lang.php';

class rude_report_timetable
{
	public static function html()
	{
		?>
<<<<<<< HEAD
		<table class="border font-10 full-width">
			<tr>
				<td rowspan="4">
					<?= RUDE_REPORT_TABLE_NO ?>
					<nobr>
						<?= RUDE_REPORT_TABLE_NO_PP ?>
					</nobr>
				</td>
				<td rowspan="4"><?= RUDE_REPORT_TABLE_CYCLE_NAME ?></td>
				<td rowspan="4" class="relative bottom"><? new image(RUDE_REPORT_TABLE_DEPARTMENT) ?></td>
=======
		<table class="border font-10">
			<tr>
				<td rowspan="4"><?= RUDE_REPORT_TABLE_NO ?></td>
				<td rowspan="4"><?= RUDE_REPORT_TABLE_CYCLE_NAME ?></td>
				<td rowspan="4" class="relative small"><div class="rotate_270"><?= RUDE_REPORT_TABLE_DEPARTMENT ?></div></td>
>>>>>>> 50ccc2e4ffd02f6db1d20ffae8ac2dec7db8457f

				<td rowspan="1" colspan="9"><div class="nowrap"><?= RUDE_REPORT_TABLE_ACADEMIC_HOURS ?></div></td>
				<td rowspan="1" colspan="31"><div class="nowrap"><?= RUDE_REPORT_TABLE_DISTRIBUTION ?></div></td>
			</tr>

			<tr>
<<<<<<< HEAD
				<td rowspan="3" class="relative column bottom"><? new image(RUDE_REPORT_TABLE_EXAMS)                  ?></td>
				<td rowspan="3" class="relative column bottom"><? new image(RUDE_REPORT_TABLE_CREDITS)                ?></td>
				<td rowspan="3" class="relative column bottom"><? new image(RUDE_REPORT_TABLE_MODEL_CALCULATIONS)     ?></td>
				<td rowspan="3" class="relative column bottom"><? new image(RUDE_REPORT_TABLE_TOTAL)                  ?></td>
				<td rowspan="3" class="relative column bottom"><? new image(RUDE_REPORT_TABLE_CLASSROOM_FULL_TIME)    ?></td>
				<td rowspan="3" class="relative column bottom"><? new image(RUDE_REPORT_TABLE_CLASSROOM_EVENING_TIME) ?></td>
=======
				<td rowspan="3" class="relative small column"><div class="rotate_270"><? new image(RUDE_REPORT_TABLE_EXAMS)                  ?></div></td>
				<td rowspan="3" class="relative small column"><div class="rotate_270"><? new image(RUDE_REPORT_TABLE_CREDITS)                ?></div></td>
				<td rowspan="3" class="relative small column"><div class="rotate_270"><? new image(RUDE_REPORT_TABLE_MODEL_CALCULATIONS)     ?></div></td>
				<td rowspan="3" class="relative small column"><div class="rotate_270"><? new image(RUDE_REPORT_TABLE_TOTAL)                  ?></div></td>
				<td rowspan="3" class="relative small column"><div class="rotate_270"><? new image(RUDE_REPORT_TABLE_CLASSROOM_FULL_TIME)    ?></div></td>
				<td rowspan="3" class="relative small column"><div class="rotate_270"><? new image(RUDE_REPORT_TABLE_CLASSROOM_EVENING_TIME) ?></div></td>
>>>>>>> 50ccc2e4ffd02f6db1d20ffae8ac2dec7db8457f

				<td colspan="3" class="tiny"><?= RUDE_REPORT_TABLE_OF_THEM ?></td>

				<td colspan="6" class="tiny">I <?= RUDE_REPORT_TABLE_YEAR ?></td>
				<td colspan="6" class="tiny">II <?= RUDE_REPORT_TABLE_YEAR ?></td>
				<td colspan="6" class="tiny">III <?= RUDE_REPORT_TABLE_YEAR ?></td>
				<td colspan="6" class="tiny">IV <?= RUDE_REPORT_TABLE_YEAR ?></td>
				<td colspan="6" class="tiny">V <?= RUDE_REPORT_TABLE_YEAR ?></td>

<<<<<<< HEAD
				<td rowspan="3" class="relative column bottom"><? new image(RUDE_REPORT_TABLE_FINAL_CREDITS) ?></td>
			</tr>

			<tr>
				<td rowspan="2" class="relative bottom"><? new image(RUDE_REPORT_TABLE_LECTURES) ?></td>
				<td rowspan="2" class="relative bottom"><? new image(RUDE_REPORT_TABLE_LABS) ?></td>
				<td rowspan="2" class="relative bottom"><? new image(RUDE_REPORT_TABLE_SEMINARS) ?></td>
=======
				<td rowspan="3" class="relative small column"><div class="rotate_270 last_column bold"><?= RUDE_REPORT_TABLE_FINAL_CREDITS ?></div></td>
			</tr>

			<tr>
				<td rowspan="2" class="relative small"><div class="rotate_270"><?= RUDE_REPORT_TABLE_LECTURES ?></div></td>
				<td rowspan="2" class="relative small"><div class="rotate_270"><?= RUDE_REPORT_TABLE_LABS ?></div></td>
				<td rowspan="2" class="relative small"><div class="rotate_270"><?= RUDE_REPORT_TABLE_SEMINARS ?></div></td>
>>>>>>> 50ccc2e4ffd02f6db1d20ffae8ac2dec7db8457f

				<td colspan="3" class="tiny"><div class="nowrap">I <?= RUDE_REPORT_TABLE_TOTAL_SEMESTER ?></div><div class="nowrap">17<?= RUDE_REPORT_TABLE_TOTAL_WEEKS ?></div></td>
				<td colspan="3" class="tiny"><div class="nowrap">II <?= RUDE_REPORT_TABLE_TOTAL_SEMESTER ?></div><div class="nowrap">17 <?= RUDE_REPORT_TABLE_TOTAL_WEEKS ?></div></td>
				<td colspan="3" class="tiny"><div class="nowrap">III <?= RUDE_REPORT_TABLE_TOTAL_SEMESTER ?></div><div class="nowrap">17 <?= RUDE_REPORT_TABLE_TOTAL_WEEKS ?></div></td>
				<td colspan="3" class="tiny"><div class="nowrap">IV <?= RUDE_REPORT_TABLE_TOTAL_SEMESTER ?></div><div class="nowrap">17 <?= RUDE_REPORT_TABLE_TOTAL_WEEKS ?></div></td>
				<td colspan="3" class="tiny"><div class="nowrap">V <?= RUDE_REPORT_TABLE_TOTAL_SEMESTER ?></div><div class="nowrap">17 <?= RUDE_REPORT_TABLE_TOTAL_WEEKS ?></div></td>
				<td colspan="3" class="tiny"><div class="nowrap">VI <?= RUDE_REPORT_TABLE_TOTAL_SEMESTER ?></div><div class="nowrap">17 <?= RUDE_REPORT_TABLE_TOTAL_WEEKS ?></div></td>
				<td colspan="3" class="tiny"><div class="nowrap">VII <?= RUDE_REPORT_TABLE_TOTAL_SEMESTER ?></div><div class="nowrap">16 <?= RUDE_REPORT_TABLE_TOTAL_WEEKS ?></div></td>
				<td colspan="3" class="tiny"><div class="nowrap">VIII <?= RUDE_REPORT_TABLE_TOTAL_SEMESTER ?></div><div class="nowrap">16 <?= RUDE_REPORT_TABLE_TOTAL_WEEKS ?></div></td>
				<td colspan="3" class="tiny"><div class="nowrap">IX <?= RUDE_REPORT_TABLE_TOTAL_SEMESTER ?></div><div class="nowrap">16 <?= RUDE_REPORT_TABLE_TOTAL_WEEKS ?></div></td>
				<td colspan="3" class="tiny"><div class="nowrap">X <?= RUDE_REPORT_TABLE_TOTAL_SEMESTER ?></div><div class="nowrap">7 <?= RUDE_REPORT_TABLE_TOTAL_WEEKS ?></div></td>
			</tr>
			<tr>
				<? rude_report_timetable::html_td_total() ?>
				<? rude_report_timetable::html_td_total() ?>
				<? rude_report_timetable::html_td_total() ?>
				<? rude_report_timetable::html_td_total() ?>
				<? rude_report_timetable::html_td_total() ?>
				<? rude_report_timetable::html_td_total() ?>
				<? rude_report_timetable::html_td_total() ?>
				<? rude_report_timetable::html_td_total() ?>
				<? rude_report_timetable::html_td_total() ?>
				<? rude_report_timetable::html_td_total() ?>
			</tr>

			<tr>
				<? rude_report_timetable::html_td_loop(1, 43); ?>
			</tr>

			<tr>
				<? rude_report_timetable::html_td_empty(1) ?>
				<td>Цикл социально­гуманитарных дисциплин</td>
				<? rude_report_timetable::html_td_empty(41) ?>
			</tr>
		</table>
	<?
	}

	public static function html_td_empty($count)
	{
		for ($i = 0; $i < $count; $i++)
		{
			?><td></td><?
		}
	}

	public static function html_td_total()
	{
		?>
<<<<<<< HEAD
		<td class="relative bottom"><? new image(RUDE_REPORT_TABLE_TOTAL_HOURS) ?></td>
		<td class="relative bottom"><? new image(RUDE_REPORT_TABLE_TOTAL_CLASSROOM_HOURS) ?></td>
		<td class="relative bottom"><? new image(RUDE_REPORT_TABLE_TOTAL_CREDITS) ?></td>
=======
		<td class="relative small short"><div class="rotate_270"><?= RUDE_REPORT_TABLE_TOTAL_HOURS ?></div></td>
		<td class="relative small short"><div class="rotate_270"><?= RUDE_REPORT_TABLE_TOTAL_CLASSROOM_HOURS ?></div></td>
		<td class="relative small short"><div class="rotate_270"><?= RUDE_REPORT_TABLE_TOTAL_CREDITS ?></div></td>
>>>>>>> 50ccc2e4ffd02f6db1d20ffae8ac2dec7db8457f
	<?
	}

	public static function html_td_loop($from, $to)
	{
		if ($to < $from)
		{
			return;
		}

		for ($i = $from; $i <= $to; $i++)
		{
			?><td class="bold"><?= $i ?></td><?
		}
	}
}