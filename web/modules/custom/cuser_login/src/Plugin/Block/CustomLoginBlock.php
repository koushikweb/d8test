<?php

namespace Drupal\cuser_login\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

/**
  * Provides a block with a simple text.
  *
  * @Block(
  *   id = "custom_login_block",
  *   admin_label = @Translation("Custom Login"),
  * )
  */
 class CustomLoginBlock extends BlockBase
 {
     /**
      * {@inheritdoc}
      */
     public function build()
     {
         return [
        '#markup' => $this->t('Custom login Block'),
      ];
     }

     /**
      * {@inheritdoc}
      */
     protected function blockAccess(AccountInterface $account)
     {
         return AccessResult::allowed();
     }

     /**
      * {@inheritdoc}
      */
     public function blockForm($form, FormStateInterface $form_state)
     {
         $config = $this->getConfiguration();

         return $form;
     }

     public function blockSubmit($form, FormStateInterface $form_state)
     {
         $this->configuration['custom_login_settings'] = $form_state->getValue('custom_login_settings');
     }
 }
