<?php

namespace Drupal\upei_footer\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a standardised footer for UPEI VRE's
 *
 * @Block(
 *   id = "upei_footer",
 *   admin_label = @Translation("UPEI Footer"),
 * )
 */
class UpeiFooterBlock extends BlockBase {
	/**
	 * {@inheritdoc}
	 */
	public function build() {

		//fire up the httpclient
		$client = \Drupal::httpClient();
		//get the html file
		$request = $client->get('http://www.upei.ca/becomeastudent/files/misc/footer.php');
		//see if it exists
		$response_code = $request->getStatusCode();
		//jam the contents ito a variable
			
		return array(
			//'#theme' => 'block',
			'#markup' => $request->getBody(),
			//'#markup' => $response,
			'#attached' => array(
				'library' => array(
					'upei_footer/upei_footer' 

				)
			),
		);
	}
}
