<?php

namespace App\Http\Controllers;

use App\Banner;
use App\ClassCard;
use App\FormDownload;
use App\MessageAnnouncement;
use App\SchoolEnvironment;
use Jenssegers\Agent\Agent;

class AppController extends Controller
{
    public function index()
    {
        switch (request()->session()->get('lang')) {
            case 'jp':
                return $this->getView('jp', 'front_jp.index');
            default:
                return $this->getView('en', 'front.index');
        }
    }

    public function getView($lang, $view)
    {
        app()->setLocale($lang);

        $agent = new Agent();
        $messageTake = $agent->isDesktop() ? 6 : 3;

        // banner
        $banners = Banner::all()->sortByDesc('sort');

        // class cards
        $classCards = $this->filterByTitle(ClassCard::all());

        // school environments
        $schoolEnvironments = $this->filterByTitle(SchoolEnvironment::all());

        // message announcements
        $messageAnnouncements = $this->filterByTitle(MessageAnnouncement::all());
        $messageAnnouncementsTake = $messageAnnouncements->take($messageTake);

        // form downloads
        $formDownloads = $this->filterByLang(FormDownload::all(), $lang);
        $formDownloadsTake = $formDownloads->take(5);

        return view($view, compact('banners', 'classCards', 'formDownloads', 'formDownloadsTake', 'messageAnnouncements', 'messageAnnouncementsTake', 'schoolEnvironments'));
    }

    public function filterByTitle($data)
    {
        return $data
            ->filter(function ($item) {
                return $item->title != '';
            })
            ->sortByDesc('sort');
    }

    public function filterByLang($data, $lang)
    {
        return $data
            ->filter(function ($item) use ($lang) {
                return $item->lang === $lang;
            })
            ->sortByDesc('sort');
    }
}
