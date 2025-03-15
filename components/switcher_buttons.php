<?php


?>

<hr>
<div class="dark-mode-table-wrap">


    <h1>Buttons Options</h1>
    <table>
        <thead>
            <tr>
                <th>Preview</th>
                <th>ShortCode</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div>
                        <button class="mode"></button>
                    </div>
                </td>

                <td class="flex">
                    <div class="shortcode">[dark_mode_toggle_style_1]</div>


                    <div class="copyButton" data-shortcode="[dark_mode_toggle_style_1]">

                        <div class="icon">
                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M16 12.9V17.1C16 20.6 14.6 22 11.1 22H6.9C3.4 22 2 20.6 2 17.1V12.9C2 9.4 3.4 8 6.9 8H11.1C14.6 8 16 9.4 16 12.9Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M22 6.9V11.1C22 14.6 20.6 16 17.1 16H16V12.9C16 9.4 14.6 8 11.1 8H8V6.9C8 3.4 9.4 2 12.9 2H17.1C20.6 2 22 3.4 22 6.9Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>

                        </div>
                        <div class="icon-copied" style="display: none;">
                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M22 11.1V6.9C22 3.4 20.6 2 17.1 2H12.9C9.4 2 8 3.4 8 6.9V8H11.1C14.6 8 16 9.4 16 12.9V16H17.1C20.6 16 22 14.6 22 11.1Z" stroke="green" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M16 17.1V12.9C16 9.4 14.6 8 11.1 8H6.9C3.4 8 2 9.4 2 12.9V17.1C2 20.6 3.4 22 6.9 22H11.1C14.6 22 16 20.6 16 17.1Z" stroke="green" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M6.08008 15L8.03008 16.95L11.9201 13.05" stroke="green" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                            Copied!
                        </div>

                    </div>

                </td>
            </tr>
           

        </tbody>
    </table>

    <script>
        jQuery(document).ready(function($) {
            $('.mode').on('click', function() {
                $('.dark-mode-table-wrap').toggleClass('dark-mode');
            });
            $('.copyButton').on('click', function() {
                const shortcode = $(this).data('shortcode'); // Get the shortcode from the data attribute

                // Create a temporary textarea to hold the shortcode
                const textarea = $('<textarea>').val(shortcode).appendTo('body');

                // Select the text in the textarea
                textarea.select();
                document.execCommand('copy');

                // Remove the temporary textarea
                textarea.remove();

                // Hide the original icon and show the "copied" icon
                $(this).find('.icon').hide();
                $(this).find('.icon-copied').show();

                // After 2 seconds, hide the "copied" icon and show the original icon again
                setTimeout(() => {
                    $(this).find('.icon-copied').hide();
                    $(this).find('.icon').show();
                }, 10000); // 2 seconds delay
            });
        });
    </script>
</div>