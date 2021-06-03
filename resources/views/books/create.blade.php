@extends('layouts.app')

@section('content')
    <section class="flex flex-row justify-center pt-3 min-h-screen text-gray-300 bg-gray-800">
        <div class="w-2/3">
            @livewire('book.create')
        </div>
    </section>
@endsection

@section('script')
    <script>
        function toSlug() {
            return {
                convert(title) {
                    title = title.replace(/^\s+|\s+$/g, '');

                    // Make the string lowercase
                    title = title.toLowerCase();

                    // Remove accents, swap ñ for n, etc
                    var from =
                        "ÁÄÂÀÃÅČÇĆĎÉĚËÈÊẼĔȆÍÌÎÏŇÑÓÖÒÔÕØŘŔŠŤÚŮÜÙÛÝŸŽáäâàãåčçćďéěëèêẽĕȇíìîïňñóöòôõøðřŕšťúůüùûýÿžþÞĐđßÆa·/_,:;";
                    var to =
                        "AAAAAACCCDEEEEEEEEIIIINNOOOOOORRSTUUUUUYYZaaaaaacccdeeeeeeeeiiiinnooooooorrstuuuuuyyzbBDdBAa------";
                    for (var i = 0, l = from.length; i < l; i++) {
                        title = title.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
                    }

                    // Remove invalid chars
                    title = title.replace(/[^a-z0-9 -]/g, '')
                        // Collapse whitespace and replace by -
                        .replace(/\s+/g, '-')
                        // Collapse dashes
                        .replace(/-+/g, '-');

                    return title;
                }
            }
        }

    </script>
@endsection
