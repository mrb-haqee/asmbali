<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Illuminate\Support\Facades\Log;

class SEOMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        Log::info('Middleware SEOMiddleware dipanggil!');

        // SEOMeta::setTitle('Yayasan Ajang Silaturahmi Muslim Bali - Berbuat Untuk Kemaslahatan Ummat');
        SEOMeta::setDescription('Yayasan Ajang Silaturahmi Muslim (ASM) Bali adalah lembaga sosial di Bali yang aktif dalam berbagai kegiatan kemanusiaan sejak 2019 seperti berbagi sayur pada Ju\'mat Berkah, bantuan sembako bulanan, khitan gratis, ambulans gratis, sosial dakwah, dan Rumah Tahfidz Qur\'an.');
        SEOMeta::setKeywords([
            'asm',
            'asmbali',
            'bali',
            'yayasan sosial bali',
            'yayasan muslim bali',
            'sedekah jumat bali',
            'jumat berkah bali',
            'berbagi sayur bali',
            'bantuan sembako bali',
            'khitan gratis bali',
            'sunatan gratis bali',
            'ambulans gratis bali',
            'layanan ambulans gratis bali',
            'sosial dakwah bali',
            'kajian islam bali',
            'rumah tahfidz bali',
            'hafalan quran bali',
            'bantu dhuafa bali',
            'program sosial bali',
            'kegiatan amal bali',
            'yayasan islam bali',
            'peduli yatim bali',
            'santunan yatim bali',
            'sedekah online bali',
            'infak dan sedekah bali',
            'donasi bali',
            'bantuan kemanusiaan bali',
            'kegiatan keagamaan bali',
            'tabligh akbar bali',
            'bantuan kesehatan bali',
            'bantu anak yatim bali',
            'zakat infaq sedekah bali',
            'penghafal quran bali',
            'pesantren tahfidz bali',
            'rumah quran bali',
            'dakwah islam bali',
            'kajian sunnah bali',
            'kegiatan dakwah bali',
            'santunan dhuafa bali',
            'bantuan pangan bali',
            'bantu fakir miskin bali',
            'santunan anak yatim bali',
            'bakti sosial bali',
            'bantu masyarakat kurang mampu bali',
            'sedekah berkah bali',
            'sedekah dhuafa bali',
            'donasi pendidikan bali',
            'bantu santri tahfidz bali',
            'amal jariyah bali',
            'kegiatan sosial islami bali',
            'peduli sesama bali',
            'yayasan amal bali',
            'lembaga kemanusiaan bali',
            'bantuan medis gratis bali',
            'santunan keluarga miskin bali',
            'peduli ummat bali',
            'gerakan sosial islam bali',
            'donasi sosial bali',
            'zakat yatim piatu bali',
            'program peduli masyarakat bali',
            'bantu kaum duafa bali',
            'yayasan keislaman bali',
            'kegiatan peduli sosial bali',
            'bantu anak kurang mampu bali',
            'gerakan kebaikan bali'
        ]);
        SEOMeta::setCanonical(url()->current());
        SEOMeta::addMeta('author', 'Muhammad Rafli Baihaqi');
        SEOMeta::addMeta('robots', 'index, follow'); // Bisa "noindex, nofollow" untuk halaman yang tidak ingin diindeks

        OpenGraph::setTitle('Yayasan Ajang Silaturahmi Muslim Bali - Berbuat Untuk Kemaslahatan Ummat');
        OpenGraph::setDescription('Yayasan Ajang Silaturahmi Muslim (ASM) Bali adalah lembaga sosial di Bali yang aktif dalam berbagai kegiatan kemanusiaan sejak 2019 seperti berbagi sayur pada Ju\'mat Berkah, bantuan sembako bulanan, khitan gratis, ambulans gratis, sosial dakwah, dan Rumah Tahfidz Qur\'an.');
        OpenGraph::setSiteName('ASM Bali - Yayasan Sosial Muslim Bali');
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'website'); // Bisa 'website', 'article', 'profile', dll.
        OpenGraph::addImage(asset('img/logos/asm-text.png'));
        OpenGraph::addImage(asset('img/logos/asm.png'));
        OpenGraph::setType('Organization');

        // TwitterCard::setTitle('Judul untuk Twitter');
        // TwitterCard::setDescription('Deskripsi untuk Twitter.');
        // TwitterCard::setSite('@username'); // Username Twitter akun resmi
        // TwitterCard::setImage(asset('images/twitter-thumbnail.jpg'));
        // TwitterCard::setType('summary_large_image'); // Bisa 'summary' atau 'summary_large_image'

        JsonLd::setTitle('Yayasan Ajang Silaturahmi Muslim Bali - Berbuat Untuk Kemaslahatan Ummat');
        JsonLd::setDescription('Yayasan Ajang Silaturahmi Muslim (ASM) Bali adalah lembaga sosial di Bali yang aktif dalam berbagai kegiatan kemanusiaan sejak 2019 seperti berbagi sayur pada Ju\'mat Berkah, bantuan sembako bulanan, khitan gratis, ambulans gratis, sosial dakwah, dan Rumah Tahfidz Qur\'an.');
        JsonLd::setType('Organization');
        JsonLd::setUrl(url()->current());
        JsonLd::addImage(asset('img/logos/asm.png'));
        // JsonLd::addProperty('name', 'Ajang Silaturahmi Muslim Bali');
        // JsonLd::addProperty('foundingDate', '2019');
        // JsonLd::addProperty('address', [
        //     '@type' => 'PostalAddress',
        //     'addressLocality' => 'Bali, Indonesia'
        // ]);
        // JsonLd::addProperty('contactPoint', [
        //     '@type' => 'ContactPoint',
        //     'telephone' => '+6281353262890',
        //     'contactType' => 'Hotline'
        // ]);

        return $next($request);
    }
}
