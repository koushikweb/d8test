<?php

namespace Drupal\rssfeed\Plugin\Block;

use Drupal\Core\Block\BlockBase;

  /**
 * Provides a 'Rssfeed Block' Block.
 *
 * @Block(
 *   id = "rssfeed_block",
 *   admin_label = @Translation("Rssfeed block"),
 *   category = @Translation("Rssfeed block category"),
 * )
 */

  class RssFeed extends BlockBase {
   /**
    * @inheritDoc
    */
    public function build(){
      return [
      '#markup' => $this->t("Sample drupal 8 block"),
      ];
    }
  }

