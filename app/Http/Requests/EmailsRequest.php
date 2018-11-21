<?php

namespace App\Http\Requests;

/**
 * EmailsRequest.
 *
 * @author  Ladybird <info@ladybirdweb.com>
 */
class EmailsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email_address' => 'required|email|unique:emails',
            'email_name'    => 'required',
            // 'department' => 'required',
            // 'priority' => 'required',
            // 'help_topic' => 'required',
            // 'imap_config' => 'required',
            'password' => 'required|min:6',

            // 'user_name' => 'required',
            // 'sending_host' => 'required',
            // 'sending_port' => 'required',
           'fetching_host'          => 'required',
           'fetching_port'          => 'required',
           'fetching_encryption'    => 'required',
           'fetching_protocol'      => 'required',
//            'mailbox_protocol' => 'required',
        ];
    }
}
