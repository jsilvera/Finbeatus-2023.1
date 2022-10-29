<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailSMSTemplateSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('email_sms_templates')->insert([
			[
				"name" => "Transfer Money",
				"slug" => "TRANSFER_MONEY",
				"subject" => "Transfer Money",
				"email_body" => "<div>\r\n<div>Dear {{name}},</div>\r\n<div>You have received {{amount}} to {{account_number}} from {{sender_account_number}} on {{dateTime}}</div>\r\n</div>",
				"sms_body" => "Dear {{name}}, You have received {{amount}} to {{account_number}} from {{sender_account_number}} on {{dateTime}}",
				"notification_body" => "Dear {{name}}, You have received {{amount}} to {{account_number}} from {{sender_account_number}} on {{dateTime}}",
				"shortcode" => "{{name}} {{account_number}} {{amount}} {{sender}} {{sender_account_number}} {{dateTime}}",
				"email_status" => 0,
				"sms_status" => 0,
				"notification_status" => 0,
				"template_mode" => 0,
			],
			[
				"name" => "Deposit Money",
				"slug" => "DEPOSIT_MONEY",
				"subject" => "Deposit Money",
				"email_body" => "<div>\r\n<div>Dear {{name}},</div>\r\n<div>Your account has been credited with {{amount}} on {{dateTime}}</div>\r\n</div>",
				"sms_body" => "Dear {{name}}, Your account has been credited with {{amount}} on {{dateTime}}",
				"notification_body" => "Dear {{name}}, Your account has been credited with {{amount}} on {{dateTime}}",
				"shortcode" => "{{name}} {{account_number}} {{amount}} {{dateTime}} {{depositMethod}}",
				"email_status" => 0,
				"sms_status" => 0,
				"notification_status" => 0,
				"template_mode" => 0,
			],
			[
				"name" => "Deposit Request Approved",
				"slug" => "DEPOSIT_REQUEST_APPROVED",
				"subject" => "Deposit Request Approved",
				"email_body" => "<div>\r\n<div>Dear {{name}},</div>\r\n<div>Your deposit request has been approved. Your account {{account_number}} has been credited with {{amount}} on {{dateTime}}</div>\r\n</div>",
				"sms_body" => "Dear {{name}}, Your deposit request has been approved. Your account {{account_number}} has been credited with {{amount}} on {{dateTime}}",
				"notification_body" => "Dear {{name}}, Your deposit request has been approved. Your account {{account_number}} has been credited with {{amount}} on {{dateTime}}",
				"shortcode" => "{{name}} {{account_number}} {{amount}} {{dateTime}} {{depositMethod}}",
				"email_status" => 0,
				"sms_status" => 0,
				"notification_status" => 0,
				"template_mode" => 0,
			],
			[
				"name" => "Loan Request Approved",
				"slug" => "LOAN_REQUEST_APPROVED",
				"subject" => "Loan Request Approved",
				"email_body" => "<div>\r\n<div>Dear {{name}},</div>\r\n<div>Your loan request of {{amount}} has been approved on {{dateTime}}</div>\r\n</div>",
				"sms_body" => "Dear {{name}}, Your loan request of {{amount}} has been approved on {{dateTime}}",
				"notification_body" => "Dear {{name}}, Your loan request of {{amount}} has been approved on {{dateTime}}",
				"shortcode" => "{{name}} {{amount}} {{dateTime}}",
				"email_status" => 0,
				"sms_status" => 0,
				"notification_status" => 0,
				"template_mode" => 0,
			],
			[
				"name" => "Withdraw Request Approved",
				"slug" => "WITHDRAW_REQUEST_APPROVED",
				"subject" => "Withdraw Request Approved",
				"email_body" => "<div>\r\n<div>Dear {{name}},</div>\r\n<div>Your withdraw request has been approved. Your account has been debited with {{amount}} on {{dateTime}}</div>\r\n</div>",
				"sms_body" => "Dear {{name}}, Your withdraw request has been approved. Your account has been debited with {{amount}} on {{dateTime}}",
				"notification_body" => "Dear {{name}}, Your withdraw request has been approved. Your account has been debited with {{amount}} on {{dateTime}}",
				"shortcode" => "{{name}} {{account_number}} {{amount}} {{withdrawMethod}} {{dateTime}}",
				"email_status" => 0,
				"sms_status" => 0,
				"notification_status" => 0,
				"template_mode" => 0,
			],
			[
				"name" => "Deposit Request Rejected",
				"slug" => "DEPOSIT_REQUEST_REJECTED",
				"subject" => "Deposit Request Rejected",
				"email_body" => "<div>\r\n<div>Dear {{name}},</div>\r\n<div>Your deposit request of {{amount}} has been rejected.</div>\r\n<div>&nbsp;</div>\r\n<div>Amount:&nbsp;{{amount}}</div>\r\n<div>Deposit Method: {{depositMethod}}</div>\r\n</div>",
				"sms_body" => "Dear {{name}}, Your deposit request of {{amount}} has been rejected.",
				"notification_body" => "Dear {{name}}, Your deposit request of {{amount}} has been rejected.",
				"shortcode" => "{{name}}  {{account_number}} {{amount}} {{depositMethod}}",
				"email_status" => 0,
				"sms_status" => 0,
				"notification_status" => 0,
				"template_mode" => 0,
			],
			[
				"name" => "Loan Request Rejected",
				"slug" => "LOAN_REQUEST_REJECTED",
				"subject" => "Loan Request Rejected",
				"email_body" => "<div>\r\n<div>Dear {{name}},</div>\r\n<div>Your loan request of {{amount}} has been rejected on {{dateTime}}</div>\r\n</div>",
				"sms_body" => "Dear {{name}}, Your loan request of {{amount}} has been rejected on {{dateTime}}",
				"notification_body" => "Dear {{name}}, Your loan request of {{amount}} has been rejected on {{dateTime}}",
				"shortcode" => "{{name}} {{amount}} {{dateTime}}",
				"email_status" => 0,
				"sms_status" => 0,
				"notification_status" => 0,
				"template_mode" => 0,
			],
			[
				"name" => "Withdraw Request Rejected",
				"slug" => "WITHDRAW_REQUEST_REJECTED",
				"subject" => "Withdraw Request Rejected",
				"email_body" => "<div>\r\n<div>Dear {{name}}, Your withdraw request has been rejected. Your transferred amount {{amount}} has returned back to your account.</div>\r\n</div>",
				"sms_body" => "Dear {{name}}, Your withdraw request has been rejected. Your transferred amount {{amount}} has returned back to your account.",
				"notification_body" => "Dear {{name}}, Your withdraw request has been rejected. Your transferred amount {{amount}} has returned back to your account.",
				"shortcode" => "{{name}} {{account_number}} {{amount}} {{withdrawMethod}} {{dateTime}}",
				"email_status" => 0,
				"sms_status" => 0,
				"notification_status" => 0,
				"template_mode" => 0,
			],
			[
				"name" => "Withdraw Money",
				"slug" => "WITHDRAW_MONEY",
				"subject" => "Withdraw Money",
				"email_body" => "<div>\r\n<div>Dear {{name}},</div>\r\n<div>Your account has been debited with {{amount}} on {{dateTime}}</div>\r\n</div>",
				"sms_body" => "Dear {{name}}, Your account has been debited with {{amount}} on {{dateTime}}",
				"notification_body" => "Dear {{name}}, Your account has been debited with {{amount}} on {{dateTime}}",
				"shortcode" => "{{name}} {{account_number}} {{amount}} {{dateTime}} {{withdrawMethod}}",
				"email_status" => 0,
				"sms_status" => 0,
				"notification_status" => 0,
				"template_mode" => 0,
			],
			/*[
				                "name"                => "Reset Password",
				                "slug"                => "RESET_PASSWORD",
				                "subject"             => "Reset Password Notification",
				                "email_body"          => '<p>You are receiving this email because we received a password reset request for your account.</p><p><a style="background: #2d3748; color: #fff; display: inline-block; border-bottom: 8px solid #2d3748; border-left: 18px solid #2d3748; border-right: 18px solid #2d3748; border-top: 8px solid #2d3748; border-radius: 4px; overflow: hidden; text-decoration: none;" title="Reset Password" href="{{password_reset_link}}">Reset Password</a></p><p>This password reset link will expire in 60 minutes.</p><p>If you did not request a password reset, no further action is required.</p><p>&nbsp;</p><div><div>If you are having trouble clicking the "<strong>Reset Password</strong>" button, copy and paste the URL below into your web browser:&nbsp;<a href="{{password_reset_link}}">{{password_reset_link}}</a></div></div>',
				                "sms_body"            => "",
				                "notification_body"   => "",
				                "shortcode"           => "{{password_reset_link}}",
				                "email_status"        => 0,
				                "sms_status"          => 0,
				                "notification_status" => 0,
				                "template_mode"       => 1,
			*/
		]);
	}
}
