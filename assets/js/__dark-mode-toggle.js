// Immediately check and apply dark mode before DOM loads
(function() {
    const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)").matches;
    const storedDarkMode = localStorage.getItem('darkMode') === 'true';

    if (storedDarkMode) {
        document.body.classList.add('dark-mode-active'); // Apply class immediately
    } else if (prefersDarkScheme) {
        document.body.classList.add('dark-mode-active-default'); // Apply system mode
    }
})();

jQuery(document).ready(function($) {
    // Check if the dark mode plugin is activated
    if (!mySettings.activate_plugin) {
        console.warn('The dark mode Plugin is not Enabled');
        $('#dark-mode-toggle').hide();
        return;
    }

    const isCustom = mySettings.dark_mode_style === 'custom';
    const classToToggle = isCustom ? 'dark-mode-active' : 'dark-mode-active-default';

    // Ensure body class matches settings (in case of mismatched initial state)
    if (mySettings.persistent_mode && localStorage.getItem('darkMode') === 'true') {
        $('body').addClass(classToToggle);
    }

    // Toggle dark mode on button click
    $('#dark-mode-toggle').on('click', function() {
        $('body').toggleClass(classToToggle);
        if (mySettings.persistent_mode) {
            localStorage.setItem('darkMode', $('body').hasClass('dark-mode-active'));
        }
    });
});
