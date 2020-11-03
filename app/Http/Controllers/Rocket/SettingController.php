<?php
namespace App\Http\Controllers\Rocket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function oauth(Request $request)
    {
        return '{"services":[{"_id":"sbDr9ntFcd78jbNzf","name":"apple","buttonLabelText":"","buttonColor":"","buttonLabelColor":"","custom":false},{"_id":"yo9xgXbMYtAy3QXqi","name":"github","clientId":"886a7b2a1fb067b10d3a","buttonLabelText":"","buttonColor":"","buttonLabelColor":"","custom":false},{"_id":"ZdXCYhs4DgBTuHnym","name":"gitlab","clientId":"ad37be86b2fe45ab494ea51cffffa673c89c240e9fa6addfbedd06a587707731","buttonLabelText":"","buttonColor":"","buttonLabelColor":"","custom":false},{"_id":"XYCwL7CguzzsXWvt5","name":"google","clientId":"662030055877-uma7qar29ji84gopa740fasv2f6rfj1v.apps.googleusercontent.com","buttonLabelText":"","buttonColor":"","buttonLabelColor":"","custom":false},{"_id":"d9fTPfTrbzztyDEmG","name":"meteor-developer","clientId":"LDGYjcX2knskEP8HR","buttonLabelText":"","buttonColor":"","buttonLabelColor":"","custom":false},{"_id":"QWmNpMhWvSePfyAYf","name":"twitter","clientId":"njl2I82AXrOo0YftZyKHyC8aV","buttonLabelText":"","buttonColor":"","buttonLabelColor":"","custom":false},{"_id":"rrwadTxjYkJoxB6Li","service":"alexaskill2020","accessTokenParam":"access_token","authorizePath":"/oauth/authorize","avatarField":"","buttonColor":"#1d74f5","buttonLabelColor":"#FFFFFF","buttonLabelText":"","clientId":"","custom":true,"emailField":"","identityPath":"/me","identityTokenSentVia":"default","loginStyle":"popup","mergeRoles":false,"mergeUsers":true,"nameField":"","rolesClaim":"roles","scope":"openid","serverURL":"https://open.rocket.chat/api/v1","showButton":false,"tokenPath":"/oauth/token","tokenSentVia":"payload","usernameField":""}],"success":true}';
    }

    public function public(Request $request)
    {
        if (Str::contains($request->input('query'), 'API_Gitlab_URL')) {
            return '{"settings":[{"_id":"API_Gitlab_URL","value":"https://gitlab.com","enterprise":false},{"_id":"Accounts_EmailOrUsernamePlaceholder","value":"","enterprise":false},{"_id":"Accounts_EmailVerification","value":true,"enterprise":false},{"_id":"Accounts_Iframe_api_method","value":"POST","enterprise":false},{"_id":"Accounts_Iframe_api_url","value":"","enterprise":false},{"_id":"Accounts_ManuallyApproveNewUsers","value":false,"enterprise":false},{"_id":"Accounts_PasswordPlaceholder","value":"","enterprise":false},{"_id":"Accounts_PasswordReset","value":true,"enterprise":false},{"_id":"Accounts_RegistrationForm","value":"Public","enterprise":false},{"_id":"Accounts_RegistrationForm_LinkReplacementText","value":"Registration temporarily disabled. Please check back later!","enterprise":false},{"_id":"Accounts_ShowFormLogin","value":true,"enterprise":false},{"_id":"Accounts_iframe_enabled","value":false,"enterprise":false},{"_id":"CAS_enabled","value":false,"enterprise":false},{"_id":"CAS_login_url","value":"","enterprise":false},{"_id":"Site_Url","value":"https://open.rocket.chat","enterprise":false}],"count":15,"offset":0,"total":15,"success":true}';
        }
        if (Str::contains($request->input('query'), 'Accounts_AllowEmailChange')) {
            return '{"settings":[{"_id":"API_Use_REST_For_DDP_Calls","value":true,"enterprise":false},{"_id":"Accounts_AllowEmailChange","value":true,"enterprise":false},{"_id":"Accounts_AllowPasswordChange","value":true,"enterprise":false},{"_id":"Accounts_AllowRealNameChange","value":true,"enterprise":false},{"_id":"Accounts_AllowUserAvatarChange","value":true,"enterprise":false},{"_id":"Accounts_AllowUserProfileChange","value":true,"enterprise":false},{"_id":"Accounts_AllowUserStatusMessageChange","value":true,"enterprise":false},{"_id":"Accounts_AllowUsernameChange","value":true,"enterprise":false},{"_id":"Accounts_CustomFields","value":"","enterprise":false},{"_id":"Accounts_Directory_DefaultView","value":"channels","enterprise":false},{"_id":"Allow_Save_Media_to_Gallery","enterprise":false,"value":true},{"_id":"Assets_favicon_512","value":{"defaultUrl":"images/logo/android-chrome-512x512.png"},"enterprise":false},{"_id":"AutoTranslate_Enabled","value":true,"enterprise":false},{"_id":"CROWD_Enable","value":false,"enterprise":false},{"_id":"DirectMesssage_maxUsers","value":8,"enterprise":false},{"_id":"E2E_Enable","value":true,"enterprise":false},{"_id":"FEDERATION_Enabled","value":false,"enterprise":false},{"_id":"FileUpload_MaxFileSize","value":100857600,"enterprise":false},{"_id":"FileUpload_MediaTypeWhiteList","value":"","enterprise":false},{"_id":"Force_Screen_Lock","value":false,"enterprise":false},{"_id":"Force_Screen_Lock_After","value":1800,"enterprise":false},{"_id":"Hide_System_Messages","value":[],"enterprise":false},{"_id":"Jitsi_Domain","value":"jitsi.rocket.chat","enterprise":false},{"_id":"Jitsi_Enabled","value":true,"enterprise":false},{"_id":"Jitsi_Enabled_TokenAuth","value":false,"enterprise":false},{"_id":"Jitsi_SSL","value":true,"enterprise":false},{"_id":"Jitsi_URL_Room_Prefix","value":"RocketChat","enterprise":false},{"_id":"LDAP_Enable","value":false,"enterprise":false},{"_id":"Livechat_request_comment_when_closing_conversation","value":true,"enterprise":false},{"_id":"Message_AllowDeleting","value":true,"enterprise":false},{"_id":"Message_AllowDeleting_BlockDeleteInMinutes","value":0,"enterprise":false},{"_id":"Message_AllowEditing","value":true,"enterprise":false},{"_id":"Message_AllowEditing_BlockEditInMinutes","value":0,"enterprise":false},{"_id":"Message_AllowPinning","value":true,"enterprise":false},{"_id":"Message_AllowStarring","value":true,"enterprise":false},{"_id":"Message_AudioRecorderEnabled","value":true,"enterprise":false},{"_id":"Message_GroupingPeriod","value":300,"enterprise":false},{"_id":"Message_Read_Receipt_Enabled","value":false,"enterprise":false},{"_id":"Message_Read_Receipt_Store_Users","value":false,"enterprise":false},{"_id":"Message_TimeAndDateFormat","value":"LLL","enterprise":false},{"_id":"Message_TimeFormat","value":"LT","enterprise":false},{"_id":"Site_Name","value":"Rocket.Chat","enterprise":false},{"_id":"Store_Last_Message","value":true,"enterprise":false},{"_id":"Threads_enabled","value":true,"enterprise":false},{"_id":"UI_Allow_room_names_with_special_chars","value":true,"enterprise":false},{"_id":"UI_Use_Real_Name","value":true,"enterprise":false},{"_id":"uniqueID","value":"eoRXMCHBbQCdDnrke","enterprise":false}],"count":47,"offset":0,"total":47,"success":true}';
        }
    }
}
