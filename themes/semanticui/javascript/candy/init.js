$(document).ready(function() {
    Candy.init('https://anon-xmpp.datenknoten.me:5281/http-bind', {
        core: {
            // only set this to true if developing / debugging errors
            debug: false,
            // autojoin is a *required* parameter if you don't have a plugin (e.g. roomPanel) for it
            //   true
            //     -> fetch info from server (NOTE: does only work with openfire server)
            //   ['test@conference.example.com']
            //     -> array of rooms to join after connecting
            autojoin: ['datenknoten@chat.datenknoten.me']
        },
        view: { resources: '/themes/semanticui/candy/' }
    });

    Candy.Core.connect('anon.datenknoten.me');

    /**
     * Thanks for trying Candy!
     *
     * If you need more information, please see here:
     *   - Setup instructions & config params: http://candy-chat.github.io/candy/#setup
     *   - FAQ & more: https://github.com/candy-chat/candy/wiki
     *
     * Mailinglist for questions:
     *   - http://groups.google.com/group/candy-chat
     *
     * Github issues for bugs:
     *   - https://github.com/candy-chat/candy/issues
     */
});
