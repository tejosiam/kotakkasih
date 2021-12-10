<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 29,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 30,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 31,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 32,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 33,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 34,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 35,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 36,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 37,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 38,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 39,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 40,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 41,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 42,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 43,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 44,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 45,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 46,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 47,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 48,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 49,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 50,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 51,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 52,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 53,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 54,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 55,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 56,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
