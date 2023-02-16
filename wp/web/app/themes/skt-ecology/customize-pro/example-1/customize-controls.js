( function( api ) {
	// Extends our custom "example-1" section.
	api.sectionConstructor['skt-ecology'] = api.Section.extend( {
		// No events for this type of section.
		attachEvents: function () {},
		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
} )( wp.customize );