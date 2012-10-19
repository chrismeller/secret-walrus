<?php

	class SecretWalrus extends Plugin {

		public function configure() {

			$ui = new FormUI( 'secret-walrus' );

			$header = $ui->append( 'textarea', 'secret-walrus__header', 'secret-walrus__header', _t( 'Header' ) );
			$footer = $ui->append( 'textarea', 'secret-walrus__footer', 'secret-walrus__footer', _t( 'Footer' ) );

			// they contain HTML, so we need to use the raw versions of each
			$header->raw = true;
			$footer->raw = true;

			$ui->append( 'submit', 'save', _t( 'Save' ) );
			$ui->out();

		}

		public function action_template_header ( $theme ) {

			$code = Options::get( 'secret-walrus__header' );

			if ( empty( $code ) ) {
				return;
			}
			else {
				echo $code;
			}

		}

		public function action_template_footer ( $theme ) {

			$code = Options::get( 'secret-walrus__footer' );

			if ( empty( $code ) ) {
				return;
			}
			else {
				echo $code;
			}

		}

	}

?>