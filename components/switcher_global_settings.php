<?php



$settings = get_option('dark_mode_button_settings', []);


?>
<hr>
<h1>
    Global Settings
</h1>
<div class="row">


    <div>
        <form class="list-group " method="post" action="options.php">
            <?php settings_fields('my_dark_mode_settings_group'); ?>

            <!-- Activate or Disable Plugin -->
            <div class="list-group-item ">
                <div class="">
                    <strong class="text-secondary">Activate Plugin</strong>
                    <p class="text-muted mb-0">Enable or disable the Elementor Dark Mode Switcher plugin.</p>
                </div>
                <div class="">
                    <input type="checkbox" name="dark_mode_button_settings[activate_plugin]" value="1" <?php checked(1, $settings['activate_plugin'] ?? 0); ?>>
                </div>
            </div>

            <!-- Dark Mode Style -->
            <div class="list-group-item " style="display: none;">
                <div class="">
                    <strong class=" text-secondary">Dark Mode Style</strong>
                    <p class="text-muted mb-0">Choose between the default dark mode or custom colors.</p>
                </div>
                <div class="">
                    <select name="dark_mode_button_settings[dark_mode_style]">
                        <option value="default" <?php selected($settings['dark_mode_style'] ?? 'default', 'default'); ?>>Default Dark Mode</option>
                        <option value="custom" <?php selected($settings['dark_mode_style'] ?? '', 'custom'); ?>>Custom Dark Mode</option>
                    </select>
                </div>
            </div>

            <!-- Persistent Dark Mode -->
            <div class="list-group-item ">
                <div class="">
                    <strong class="text-secondary">Persistent Dark Mode</strong>
                    <p class="text-muted mb-0">Keep dark mode active when switching between pages.</p>
                </div>
                <div class="">
                    <input type="checkbox" name="dark_mode_button_settings[persistent_mode]" value="1" <?php checked(1, $settings['persistent_mode'] ?? 0); ?>>
                </div>
            </div>

            <!-- System-Based Mode -->
            <div class="list-group-item " style="display: none;">
                <div class="">
                    <strong class="text-secondary">Use System Mode</strong>
                    <p class="text-muted mb-0">Automatically apply dark or light mode based on the user's system preferences.</p>
                </div>
                <div class="">
                    <input type="checkbox" name="dark_mode_button_settings[system_mode]" value="1" <?php checked(1, $settings['system_mode'] ?? 0); ?>>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="submit-btn">
                <input type="submit" value="Save Dark Mode Settings">
            </div>
        </form>
    </div>

    <div class="info ">

        <div class="alert alert-info " role="alert">
            <h4>About the Elementor Dark Mode Switcher:</h4>
            <p>
                This plugin allows you to easily toggle between dark and light modes on your Elementor site, enhancing user experience and accessibility.

            </p>
        </div>
        <div class="alert alert-warning " role="alert">
            <div class="alert-msg-icon">
                <svg height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 507.425 507.425" xml:space="preserve" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path style="fill:#FFC52F;" d="M329.312,129.112l13.6,22l150.8,242.4c22.4,36,6,65.2-36.8,65.2h-406.4c-42.4,0-59.2-29.6-36.8-65.6 l198.8-320.8c22.4-36,58.8-36,81.2,0L329.312,129.112z"></path>
                        <g>
                            <path style="fill:#F4EFEF;" d="M253.712,343.512c-10.8,0-20-8.8-20-20v-143.2c0-10.8,9.2-20,20-20s20,8.8,20,20v143.2 C273.712,334.312,264.512,343.512,253.712,343.512z"></path>
                            <path style="fill:#F4EFEF;" d="M253.312,407.112c-5.2,0-10.4-2-14-6c-3.6-3.6-6-8.8-6-14s2-10.4,6-14c3.6-3.6,8.8-6,14-6 s10.4,2,14,6c3.6,3.6,6,8.8,6,14s-2,10.4-6,14C263.712,404.712,258.512,407.112,253.312,407.112z"></path>
                        </g>
                        <path d="M456.912,465.512h-406.4c-22,0-38.4-7.6-46-21.6s-5.6-32.8,6-51.2l198.8-321.6c11.6-18.8,27.2-29.2,44.4-29.2l0,0 c16.8,0,32.4,10,43.6,28.4l35.2,56.4l0,0l13.6,22l150.8,243.6c11.6,18.4,13.6,37.2,6,51.2 C495.312,457.912,478.912,465.512,456.912,465.512z M253.312,49.912L253.312,49.912c-14,0-27.2,8.8-37.6,25.2l-198.8,321.6 c-10,16-12,31.6-5.6,43.2s20.4,17.6,39.2,17.6h406.4c18.8,0,32.8-6.4,39.2-17.6c6.4-11.2,4.4-27.2-5.6-43.2l-150.8-243.6l-13.6-22 l-35.2-56.4C280.512,58.712,267.312,49.912,253.312,49.912z"></path>
                        <path d="M249.712,347.512c-13.2,0-24-10.8-24-24v-143.2c0-13.2,10.8-24,24-24s24,10.8,24,24v143.2 C273.712,336.712,262.912,347.512,249.712,347.512z M249.712,164.312c-8.8,0-16,7.2-16,16v143.2c0,8.8,7.2,16,16,16s16-7.2,16-16 v-143.2C265.712,171.512,258.512,164.312,249.712,164.312z"></path>
                        <path d="M249.712,411.112L249.712,411.112c-6.4,0-12.4-2.4-16.8-6.8c-4.4-4.4-6.8-10.8-6.8-16.8c0-6.4,2.4-12.4,6.8-16.8 c4.4-4.4,10.8-7.2,16.8-7.2c6.4,0,12.4,2.4,16.8,7.2c4.4,4.4,7.2,10.4,7.2,16.8s-2.4,12.4-7.2,16.8 C262.112,408.312,256.112,411.112,249.712,411.112z M249.712,371.112c-4,0-8.4,1.6-11.2,4.8c-2.8,2.8-4.8,7.2-4.8,11.2 c0,4.4,1.6,8.4,4.8,11.2c2.8,2.8,7.2,4.8,11.2,4.8s8.4-1.6,11.2-4.8c2.8-2.8,4.8-7.2,4.8-11.2s-1.6-8.4-4.8-11.2 C258.112,372.712,253.712,371.112,249.712,371.112z"></path>
                    </g>
                </svg>
            </div>
            <h4>Important:</h4>
            <p>
                If you choose the custom dark mode option, please ensure that Elementor is using the <a href="https://elementor.com/help/global-colors/" target="_blank" rel="noopener noreferrer">global colors system</a>. This allows you to set dark mode color options for each element. Scroll down to start configuring your Dark mode Colors!

            </p>
        </div>
        <div class="alert alert-info" role="alert">
            <h4>Persistent Dark Mode:</h4>
            <p>
                When this option is checked, dark mode will remain active for visitors to your website, even when they switch between pages. Their selected mode will be stored in local storage, ensuring that preferences are maintained even after closing the browser. This creates a consistent experience for your visitors, regardless of how they navigate your site.
            </p>
        </div>
    </div>

</div>