<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />
		<title>Qcodo Development Framework - <?php _t('Start Page'); ?></title>
		<style type="text/css">
			TD, BODY { font: 12px <?php _p(QFontFamily::Verdana) ?>; }
			.title { font: 30px <?php _p(QFontFamily::Verdana) ?>; font-weight: bold; margin-left: -2px;}
			.title_action { font: 12px <?php _p(QFontFamily::Verdana) ?>; font-weight: bold; margin-bottom: -4px; }
			.item_divider { line-height: 16px; }
			.heading { font: 16px <?php _p(QFontFamily::Verdana) ?>; font-weight: bold; }
		</style>
	</head><body>	
		<div class="title_action">Qcodo Development Framework <?php _p(QCODO_VERSION); ?></div>
		<div class="title"><?php _t('Start Page'); ?></div>
		<br class="item_divider" />

		<span class="heading"><?php _t('It worked!'); ?></span><br /><br />

		<b> <?php _t('If you are seeing this, then it means that the framework has been successfully installed.'); ?></b>
		<br /><br /><br />
		
		<?php _t('Make sure your database connection properties are up to date, and then you can add tables to your database.  To codegen, you will want to run the codegen using the qcodo codegen CLI tool from the command-line:'); ?><br />

		<blockquote style="background-color: #eee; padding: 5px; font-size: 14px; font-weight: bold; ">
			<pre>$ <?php _p(realpath(__DEVTOOLS_CLI__)); ?>/qcodo<?php QApplication::$Windows ? _p('.bat'):''; ?> codegen --help</pre>
		</blockquote>
		
		<?php _t('After codegenning, you can use either of the following tools to view the "generated" draft pages of your database application:'); ?>
		<ul>
		<li><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__) ?>/index.php"><?php _p(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__) ?></a> - <?php _t('to view the generated Form Drafts of your database'); ?></li>
		<li><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__) ?>/dashboard/index.php"><?php _p(__VIRTUAL_DIRECTORY__ . __PANEL_DRAFTS__) ?></a> - <?php _t('to view the generated Panel Drafts "dashboard" of your database'); ?></li>
		</ul>

		<?php _t('For more information, please go to the Qcodo website at:'); ?><a href="http://www.qcodo.com/">http://www.qcodo.com/</a>
		<br /><br /><br />

		<?php QApplication::VarDump(); ?>
	</body>
</html>