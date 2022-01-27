@php
$mailToQuery = http_build_query([
    'subject' => 'Kö-intresse',
    'body' => implode("\n", [
        'Barnets namn:',
        'Barnets födelsedata:',
        'Förälder 1',
        'Namn:',
        'Address:',
        'Telefon:',
        'Förälder 2',
        'Namn:',
        'Address:',
        'Telefon:',
        'E-postaddress:',
    ]),
], encoding_type: PHP_QUERY_RFC3986);
@endphp
<x-layout>
    <x-h1>Kö-intresse</x-h1>
    <section class="flex flex-col md:flex-row justify-between">
        <article class="md:w-2/3 md:pr-4 space-y-4">
            <x-img src="/images/snail.jpg"/>
            <p>
                Tegnérs förskola har en egen kö.
                Förskolan har en avdelning med 19 barn i åldrarna 1 till 6 år.
                Vi tar in 2-4 barn per år, inskolning sker normalt under i augustimånad.
            </p>
            <p>
                Antagningskriterier på förskolan är dels kötid men hänsyn tas också till
                barnets ålder så att barngruppen blir så väl sammansatt som möjligt.
                På förskolan tillämpar vi förtur för köande barn som har syskon på förskolan.
            </p>
            <p>
                Tegnérs förskola tillämpar maxtaxa i enlighet med Malmö stad.
            </p>
            <p>
                Om ni önskar ställa ert/era barn i kön, maila in en anmälan till oss på
                <x-link
                    class="-mr-1"
                    href="mailto:info@tegnersforskola.se?{{ $mailToQuery }}"
                >info@tegnersforskola.se</x-link>.
            </p>
        </article>
        <aside class="hidden md:block md:w-1/3 pl-0 lg:pl-12">
            <x-img md src="/images/snail.jpg"/>
        </aside>
    </section>
</x-layout>
