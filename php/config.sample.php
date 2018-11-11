<?php
/**
 * Bitcoin Status Page
 *
 * @category File
 * @package  BitcoinStatus
 * @license  https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

$config = array(
  // RPC
  'rpc_user'                  => 'rpcuser',
  'rpc_pass'                  => 'rpcpass',
  'rpc_host'                  => 'localhost',
  'rpc_port'                  => '6969',
  'rpc_ssl'                   => false,
  'rpc_ssl_ca'                => null,

  // Donations
  'display_donation_text'     => false,
  'donation_address'          => 'not_set',

  // Staking
  'display_stake_info'        => true,
  'display_balance'           => true,

  // Temperature
  'Raspi_temp'                => true,

  // UI
  'display_free_disk_space'   => true,
  'display_version'           => true,
  'display_max_height'        => true,
  'use_bitcoind_ip'           => true,

  // Uptime
  'bitcoind_process_name'     => 'okcashd',

  // System
  'date_format'               => 'H:i:s T, j F Y ',
  'disk_space_mount_point'    => '/home/pi/.okcash',
  'timezone'                  => null,
  'stylesheet'                => 'v2-light.css',
  'debug'                     => false,
  'admin_email'               => 'admin@mail.com',
);
