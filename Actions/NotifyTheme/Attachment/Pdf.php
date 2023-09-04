<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\NotifyTheme\Attachment;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6eafc0a (up)
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Notify\Datas\AttachmentData;
use Modules\Xot\Services\HtmlService;
<<<<<<< HEAD
=======
use Modules\Notify\Models\NotifyTheme;
>>>>>>> 4a7ff36 (up)
=======
>>>>>>> 6eafc0a (up)
=======
use Modules\Notify\Models\NotifyTheme;
>>>>>>> b1b92c2 (up)
use Spatie\QueueableAction\QueueableAction;

/**
 * -- buildmailmessage ha troppi pezzi simili ..
 */
class Pdf
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string $post_type, array $view_params): AttachmentData
    {
        $notify_theme_data = app(\Modules\Notify\Actions\NotifyTheme\Get::class)->execute($post_type, 'pdf', $view_params);
        $html = $notify_theme_data->body_html;

        $file_name = Str::slug($notify_theme_data->subject) . '.pdf';
        if (isset($view_params[$file_name])) {
            $file_name = $view_params[$file_name];
        }
        $file_path = Storage::disk('cache')->path($file_name);

        HtmlService::toPdf(['filename' => $file_path, 'html' => $html, 'out' => 'file', 'pdforientation' => 'P']);

        return AttachmentData::from([
            'path' => $file_path,
            'as' => $file_name,
            'mime' => 'application/pdf',
=======
=======
>>>>>>> b1b92c2 (up)
    public function execute(string $post_type, array $view_params)
    {
        $lang = app()->getLocale();
        $notify_theme = NotifyTheme::firstOrCreate([
            'lang' => $lang,
            'type' => 'pdf',
            'post_type' => $post_type,
            'post_id' => 0,
<<<<<<< HEAD
>>>>>>> 4a7ff36 (up)
=======
    public function execute(string $post_type, array $view_params): AttachmentData
    {
        $notify_theme_data = app(\Modules\Notify\Actions\NotifyTheme\Get::class)->execute($post_type, 'pdf', $view_params);
        $html = $notify_theme_data->body_html;

        $file_name = Str::slug($notify_theme_data->subject) . '.pdf';
        if (isset($view_params[$file_name])) {
            $file_name = $view_params[$file_name];
        }
        $file_path = Storage::disk('cache')->path($file_name);

        HtmlService::toPdf(['filename' => $file_path, 'html' => $html, 'out' => 'file', 'pdforientation' => 'P']);

        return AttachmentData::from([
            'path' => $file_path,
            'as' => $file_name,
            'mime' => 'application/pdf',
>>>>>>> 6eafc0a (up)
=======
>>>>>>> b1b92c2 (up)
        ]);
    }
}
