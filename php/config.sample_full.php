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
  'donation_amount'           => '0.001',

  // Peers
  'display_peer_info'         => false,
  'display_peer_port'         => false,
  'hide_dark_peers'           => true,
  'ignore_unknown_ping'       => false,
  'peers_to_ignore'           => array(),

  // Staking
  'display_stake_info'        => true,
  'display_balance'           => true,
  
   // Temperature
  'Raspi_temp'                => true,

  // Cache
  'cache_geo_data'            => false,
  'geo_cache_file'            => '/var/tmp/okcashdd-geolocation.cache',
  'geo_cache_time'            => 604800,
  'use_cache'                 => true,
  'cache_file'                => '/tmp/okcashd-status.cache',
  'max_cache_time'            => 300,
  'nocache_whitelist'         => array('127.0.0.1'),

  // Geolocation
  'geolocate_peer_ip'         => false,
  'display_ip_location'       => false,

  // UI
  'display_ip'                => false,
  'display_free_disk_space'   => true,
  'display_testnet'           => false,
  'display_version'           => true,
  'display_github_ribbon'     => false,
  'display_max_height'        => true,
  'use_bitcoind_ip'           => true,
  'intro_text'                => 'not_set',
  'display_bitnodes_info'     => false,
  'display_chart'             => false,
  'display_peer_chart'        => false,
  'node_links'                => array(),

  // Stats
  'stats_whitelist'           => array('127.0.0.1'),
  'stats_file'                => '/tmp/okcashd-status.data',
  'stats_max_age'             => '604800',
  'stats_min_data_points'     => 5,

  // Node Count
  'peercount_whitelist'       => array('127.0.0.1'),
  'peercount_file'            => '/tmp/okcashd-peers.data',
  'peercount_max_age'         => '2592000',
  'peercount_min_data_points' => 10,
  'peercount_extra_nodes'     => array(),

  // Uptime
  'display_bitcoind_uptime'   => false,
  'bitcoind_process_name'     => 'okcashd',

  // System
  'date_format'               => 'H:i:s T, j F Y ',
  'disk_space_mount_point'    => '/home/pi/.okcash',
  'timezone'                  => null,
  'stylesheet'                => 'v2-light.css',
  'debug'                     => false,
  'admin_email'               => 'admin@mail.com',
);
