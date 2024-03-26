@extends('layout.base')

@section('content')
    <main class="content">
        <div class="container">
            <section class="intro">
                <p class="dashed">
                    <strong>{{ $config->site['description'] }}</strong>
                </p>
                <p class="dashed">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi laboriosam officia rem! Ab autem, consequuntur dignissimos facilis inventore, ipsa iusto neque obcaecati optio perferendis provident sequi ut voluptate. Fugit, numquam!
                </p>
                <p>
                    Cumque distinctio eos explicabo iste iure nemo pariatur porro provident ratione rem repellat sint sit veritatis vero!
                </p>
            </section>
            <section class="references">
                <p>
                    <strong>Quelques références&nbsp;:</strong> delectus enim, error laborum maxime odit officiis perferendis possimus praesentium, similique.
                </p>
            </section>
            <section class="contact">
                <h2 class="h2 arrowed">
                    Contact
                    <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="28" height="14" viewBox="0 0 28 14"><polygon fill="#EE1D25" points="22.3,0 14,8.4 5.6,0 0,0 14,14 28,0 "/></svg>
                </h2>
                <address itemscope itemtype="https://schema.org/Person">
                    <strong itemprop="name">{{ $config->contact['name'] }}</strong><br>
                    <p class="address" itemprop="address">{{ $config->contact['address'] }}</p>
                    <p class="tel">
                        Tél. <a href="tel:{{ $helper->formatTelHref($config->contact['phone'], ' ') }}" title="Cliquez pour appeler" itemprop="telephone" aria-label="Appeler le numéro">
                            {{ $helper->spaceToNBSP($config->contact['phone']) }}
                        </a><br>
                        <a class="underlined" href="mailto:{{ $config->contact['mail'] }}" title="Cliquez pour envoyer un mail" itemprop="mail" aria-label="Écrire un email">
                            {{ $config->contact['mail'] }}
                        </a>
                    </p>
                </address>
            </section>
        </div>
    </main>
@endsection