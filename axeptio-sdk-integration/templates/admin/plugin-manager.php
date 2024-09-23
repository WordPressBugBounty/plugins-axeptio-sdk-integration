<div class="wrap">
	<h1 class="screen-reader-text">
		<?php esc_html_e( 'Axeptio', 'axeptio-wordpress-plugin' ); ?>
	</h1>
	<div id="axeptio-app" class="axeptio-app" x-data="pluginList(<?php echo esc_attr( wp_json_encode( $settings ) ); ?>)" x-init="$watch('plugins', (value, oldValue) => setHasChanged(value, oldValue))">
		<?php do_action( 'axeptio/before_plugin_manager_container' ); ?>
		<div class="axeptio-settings bg-white rounded-lg mt-6 shadow-md max-w-7xl mx-auto z-10">
			<?php do_action( 'axeptio/before_plugin_manager' ); ?>
			<div class="px-6 py-4 lg:pb-0">
				<div class="mt-6 mb-0  md:flex md:justify-between">
					<div class="md:inline-flex md:items-end">
						<img class="aspect-|14/3] w-40" src="<?php echo esc_attr( \Axeptio\Plugin\get_logo() ); ?>" alt="<?php esc_attr_e( 'Axeptio', 'axeptio-wordpress-plugin' ); ?>">
						<div class="mt-2 lg:mt-0 md:ml-6 text-base mb-1"><?php esc_html_e( 'Plugin manager', 'axeptio-wordpress-plugin' ); ?></div>
					</div>

					<div class="inline-flex items-center">
						<svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
							<path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z"></path>
						</svg>
						<a href="https://support.axeptio.eu/hc/en-gb/articles/17616260428561-Wordpress-integration" target="_blank" class="text-sm font-semibold"><?php esc_html_e( 'Documentation', 'axeptio-wordpress-plugin' ); ?></a>
					</div>
				</div>
				<header class="relative isolate -mx-6 border-b border-gray-200">
					<div class="absolute inset-0 -z-10 overflow-hidden" aria-hidden="true">
						<div class="absolute left-16 top-full -mt-16 transform-gpu opacity-50 blur-3xl xl:left-1/2 xl:-ml-80">
							<div class="aspect-[1154/678] w-[72.125rem] bg-gradient-to-br from-[#FF80B5] to-[#9089FC]" style="clip-path: polygon(100% 38.5%, 82.6% 100%, 60.2% 37.7%, 52.4% 32.1%, 47.5% 41.8%, 45.2% 65.6%, 27.5% 23.4%, 0.1% 35.3%, 17.9% 0%, 27.7% 23.4%, 76.2% 2.5%, 74.2% 56%, 100% 38.5%)"></div>
						</div>
					</div>

					<div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
						<div class="mx-auto flex max-w-2xl items-center justify-between gap-x-8 lg:mx-0 lg:max-w-none">
							<div class="flex items-center gap-x-6">
								<svg class="h-24 w-24 flex-none rounded-full ring-1 ring-gray-900/10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" id="cookie-design_svg__Calque_1" x="0" y="0" style="enable-background:new 0 0 445 407" viewBox="0 0 445 407"><style>.cookie-design_svg__st0{opacity:.3;fill:#1360ea;enable-background:new}.cookie-design_svg__st1{fill:#ac917d}.cookie-design_svg__st4{fill:none;stroke:#353535;stroke-width:2.8937;stroke-linecap:round;stroke-miterlimit:10}.cookie-design_svg__st16{fill:#8e2929}.cookie-design_svg__st17{fill:#e8c285}.cookie-design_svg__st18{fill:#d97c41}.cookie-design_svg__st19{fill:#d96b3c}.cookie-design_svg__st20{fill:#87201d}.cookie-design_svg__st23{fill:#f2c5b3}.cookie-design_svg__st24{fill:#fff}.cookie-design_svg__st25{fill:#2b2b2b}.cookie-design_svg__st26{fill:#ffdced}.cookie-design_svg__st28{fill:#ba341e}.cookie-design_svg__st31{fill:#4890a0}.cookie-design_svg__st33{fill:#a57856}</style><g id="cookie-design_svg__tache"><path d="M14.6 175.7c-30.3 77.6 72.6 242 275.2 147.7S436.6 52.3 361.6 26.1s-291.2 6.8-347 149.6z" class="cookie-design_svg__st0"></path><path d="M330.7 82.7V76h8.1v8.7zm43-.6v-6.8h8.1v8.8zm7.5 270.1 7.5 3-24.6-220.7-5.1 13.2zm-35.5-45.7-6.9 87.1 5.4 1.5 1.5-1.5 11.6-104.2z" class="cookie-design_svg__st1"></path><path d="m310.5 83.4 90.5-3-45.2 231.2-83.3-27.8z" style="fill:#ebf0f7"></path><path d="m338.8 303.5-2 8.1-67.8-24.3 1-6.1z" class="cookie-design_svg__st1"></path><path d="m347 311.6.9-5.1H338l-1.2 5.1zm-65.8-19.9L266 356.6l4.5 2.1h2l16.6-69.3z" class="cookie-design_svg__st1"></path><path d="m284.6 300.8 61.1 23.2v9.1l-66.6-24z" class="cookie-design_svg__st1"></path><path d="m312.4 300.8-2.5 13.3 8.1 3.1 3.8-16.4z" class="cookie-design_svg__st1"></path></g><g id="cookie-design_svg__bras_1_"><path d="M256.2 358.6c3.7 6.2 78.1 34.8 89.5 35.7s53.7-35.4 46.4-39.6c-7.3-4.2-141.9-6.2-135.9 3.9z" class="cookie-design_svg__st0"></path><path d="M44.2 211.4s-10 17.6-5 32.6l5 15s-7.5 5-7.5 10 5 10 5 10-12.5 5-7.5 10 2.5 7.5 2.5 7.5-5 0-10 2.5 2.5 12.5-2.5 12.5c0 0 8.3-.7 10-2.5 5-5 5-10 5-10s12.5-7.5 10-10c0 0 5 .8 11.3-9.6s6.3-63-16.3-68z" style="fill:#7f1b0a"></path><path d="M301.3 267.8c0 14.4-17.6 35.1-25.1 20.1-7.6-15.1-4.2-35.6-10-60.2" class="cookie-design_svg__st4"></path><path d="M131.8 338.5c8.8 13.6 9.3 31.9 1.1 45.9-1 1.7 1.7 3.3 2.7 1.6 6.7-11.6 8-26 3.8-38.7-1.2-3.6-2.9-7.1-5-10.4-1-1.6-3.7-.1-2.6 1.6zm83.2-7.1c4.2 3.9 8.5 7.7 11.2 13 1.9 3.7 2.2 7.6 2.4 11.7.1 3.7-.1 7.3-.6 11-.6 3.9-1.3 7.8-1.8 11.8-.2 2 2.9 2 3.1 0 .8-7.4 2.6-14.6 2.4-22.1-.1-4.2-.4-8.4-2.1-12.3-1.4-3.3-3.5-6.3-5.9-8.9-2-2.2-4.3-4.2-6.5-6.2-1.4-1.5-3.6.7-2.2 2z" style="fill:#353535"></path><path d="M91.8 130.7c-17.6 10.4-33.1 19.4-43.4 60.5S50.5 295 91.6 327.9s117.1 18.5 145.9-8.2 52.8-61 44.2-111c-9.2-53.4-52.4-87.4-86.3-98.7-33.6-11.2-72.6 2.3-103.6 20.7" style="fill:#e5a05c"></path><defs><path id="cookie-design_svg__SVGID_1_" d="M91.8 130.7c-17.6 10.4-33.1 19.4-43.4 60.5S50.5 295 91.6 327.9s117.1 18.5 145.9-8.2 52.8-61 44.2-111c-9.2-53.4-52.4-87.4-86.3-98.7-33.6-11.2-72.6 2.3-103.6 20.7"></path></defs><clipPath id="cookie-design_svg__SVGID_00000132776165809516449200000004080111027255722933_"><use xlink:href="#cookie-design_svg__SVGID_1_" style="overflow:visible"></use></clipPath><path d="M113.3 130.5c-8.3.6-16.1 1.4-22.8 2.2-.8.1-1.7.2-2.5.3-16 9.7-30 20.1-39.6 58.3-1.7 6.7-2.7 13.9-3.2 21.5 9.1.9 21.1 2.7 36 5.9.1-8.4.8-17 2.2-25.5-2.8-.2-5.5-1.6-7.2-5-5-10 5.3-14.2 5.8-14.4 1.3-.7 2.7-1 4.1-1 .6 0 1.2.1 1.7.1 5.4-17.4 15-31.4 25.5-42.4" style="clip-path:url(#cookie-design_svg__SVGID_00000132776165809516449200000004080111027255722933_);fill:#e58a56"></path><defs><path id="cookie-design_svg__SVGID_00000093169562387328401730000016441988553363493304_" d="M91.8 130.7c-17.6 10.4-33.1 19.4-43.4 60.5S50.5 295 91.6 327.9s117.1 18.5 145.9-8.2 52.8-61 44.2-111c-9.2-53.4-52.4-87.4-86.3-98.7-33.6-11.2-72.6 2.3-103.6 20.7"></path></defs><clipPath id="cookie-design_svg__SVGID_00000110442523241656569590000002520693465494772621_"><use xlink:href="#cookie-design_svg__SVGID_00000093169562387328401730000016441988553363493304_" style="overflow:visible"></use></clipPath><path d="M282.3 245.1c-11 16.5-28.7 38.2-53 54-.2 1.5-1 3-2.4 4.3.3-.1.5-.1.5-.1.7 2-5 6-10.5 6-1.4 0-2.9-.3-4.2-.9-.5.2-1 .5-1.5.7 3.3 5.3 6.1 10.3 8.4 14.5 7-1.4 13.5-3.2 19.7-5.4 20.4-19.4 38.2-42.8 43-73.1" style="clip-path:url(#cookie-design_svg__SVGID_00000110442523241656569590000002520693465494772621_);fill:#e58a56"></path><defs><path id="cookie-design_svg__SVGID_00000103239242211394265930000007006369853459767195_" d="M91.8 130.7c-17.6 10.4-33.1 19.4-43.4 60.5S50.5 295 91.6 327.9s117.1 18.5 145.9-8.2 52.8-61 44.2-111c-9.2-53.4-52.4-87.4-86.3-98.7-33.6-11.2-72.6 2.3-103.6 20.7"></path></defs><clipPath id="cookie-design_svg__SVGID_00000016774563491370038130000009325591097557335740_"><use xlink:href="#cookie-design_svg__SVGID_00000103239242211394265930000007006369853459767195_" style="overflow:visible"></use></clipPath><path d="M239.2 318.2c-6.2 2.2-12.7 4-19.7 5.4 1.3 2.4 2.4 4.6 3.4 6.5 5.6-3.2 10.6-6.6 14.6-10.4.6-.5 1.1-1 1.7-1.5" style="clip-path:url(#cookie-design_svg__SVGID_00000016774563491370038130000009325591097557335740_);fill:#e57750"></path><defs><path id="cookie-design_svg__SVGID_00000064345561193053004230000001975022721703563917_" d="M91.8 130.7c-17.6 10.4-33.1 19.4-43.4 60.5S50.5 295 91.6 327.9s117.1 18.5 145.9-8.2 52.8-61 44.2-111c-9.2-53.4-52.4-87.4-86.3-98.7-33.6-11.2-72.6 2.3-103.6 20.7"></path></defs><clipPath id="cookie-design_svg__SVGID_00000167359970055751180900000004686985862217222292_"><use xlink:href="#cookie-design_svg__SVGID_00000064345561193053004230000001975022721703563917_" style="overflow:visible"></use></clipPath><path d="M169.1 106c-10.5 0-21.1 1.7-31.6 4.6-7.8 5.1-16.3 11.6-24.2 19.9 7.7-.5 16-.9 24.5-.9 10.8 0 22 .6 33.1 2 1.6-4.2 6.3-6.1 6.7-6.2 1.3-.7 2.7-1 4.1-1 6.1 0 12.1 5.8 10.4 11.2 16.4 4.2 31.9 11 44.5 21.7 23.6 19.9 37 36 44.7 48.4-10.3-51.7-52.5-84.6-85.8-95.6-8.6-2.9-17.4-4.1-26.4-4.1" style="clip-path:url(#cookie-design_svg__SVGID_00000167359970055751180900000004686985862217222292_);fill:#f2c478"></path><defs><path id="cookie-design_svg__SVGID_00000133501370899409695830000009621085704327620271_" d="M91.8 130.7c-17.6 10.4-33.1 19.4-43.4 60.5S50.5 295 91.6 327.9s117.1 18.5 145.9-8.2 52.8-61 44.2-111c-9.2-53.4-52.4-87.4-86.3-98.7-33.6-11.2-72.6 2.3-103.6 20.7"></path></defs><clipPath id="cookie-design_svg__SVGID_00000030478747635618258530000015785670733023877771_"><use xlink:href="#cookie-design_svg__SVGID_00000133501370899409695830000009621085704327620271_" style="overflow:visible"></use></clipPath><path d="M137.5 110.6c-16 4.5-31.7 11.8-45.7 20.1-1.3.8-2.5 1.5-3.8 2.3.8-.1 1.6-.2 2.5-.3 6.8-.8 14.5-1.6 22.8-2.2 7.9-8.3 16.5-14.8 24.2-19.9" style="clip-path:url(#cookie-design_svg__SVGID_00000030478747635618258530000015785670733023877771_);fill:#f2b472"></path><defs><path id="cookie-design_svg__SVGID_00000094601794246817012260000000782820900437305226_" d="M91.8 130.7c-17.6 10.4-33.1 19.4-43.4 60.5S50.5 295 91.6 327.9s117.1 18.5 145.9-8.2 52.8-61 44.2-111c-9.2-53.4-52.4-87.4-86.3-98.7-33.6-11.2-72.6 2.3-103.6 20.7"></path></defs><clipPath id="cookie-design_svg__SVGID_00000139284264993317111570000007906640375899736995_"><use xlink:href="#cookie-design_svg__SVGID_00000094601794246817012260000000782820900437305226_" style="overflow:visible"></use></clipPath><path d="M81.2 218.6c-.3 20.5 3.2 40.1 10.8 56.8 2-2.7 5.2-4 5.5-4.1 1.3-.7 2.7-1 4.1-1 7.4 0 14.6 8.6 8.1 14.5.3-.1.5-.1.5-.1.6 1.8-4.2 5.5-9.3 6 8.8 12.3 20.6 22 35.8 27.8 6.9 1.2 14.1 1.8 21.6 1.8 9.9 0 20.2-1.1 31.1-3.8 7.7-1.9 15-4.5 21.9-7.6-17-27.6-46.7-66.1-86.6-78.8-16.6-5-31-8.7-43.5-11.5" style="clip-path:url(#cookie-design_svg__SVGID_00000139284264993317111570000007906640375899736995_);fill:#e58a56"></path><defs><path id="cookie-design_svg__SVGID_00000056417257079283895190000014531247490365088666_" d="M91.8 130.7c-17.6 10.4-33.1 19.4-43.4 60.5S50.5 295 91.6 327.9s117.1 18.5 145.9-8.2 52.8-61 44.2-111c-9.2-53.4-52.4-87.4-86.3-98.7-33.6-11.2-72.6 2.3-103.6 20.7"></path></defs><clipPath id="cookie-design_svg__SVGID_00000159446697425395181540000016653824704501319849_"><use xlink:href="#cookie-design_svg__SVGID_00000056417257079283895190000014531247490365088666_" style="overflow:visible"></use></clipPath><path d="M45.2 212.8c-.2 2.7-.2 5.5-.2 8.3 0 17.1 3 35.4 9.3 52.8 0 0 31.7 36.1 82.2 44.8-15.2-5.9-27.1-15.6-35.8-27.8-.4 0-.8.1-1.1.1-3.1 0-6.2-1.3-8-5-2.3-4.6-1.4-8 .4-10.3-7.6-16.7-11-36.3-10.8-56.8-14.8-3.5-26.9-5.2-36-6.1" style="clip-path:url(#cookie-design_svg__SVGID_00000159446697425395181540000016653824704501319849_);fill:#e57750"></path><defs><path id="cookie-design_svg__SVGID_00000008833309255026634320000006800646372793849738_" d="M91.8 130.7c-17.6 10.4-33.1 19.4-43.4 60.5S50.5 295 91.6 327.9s117.1 18.5 145.9-8.2 52.8-61 44.2-111c-9.2-53.4-52.4-87.4-86.3-98.7-33.6-11.2-72.6 2.3-103.6 20.7"></path></defs><clipPath id="cookie-design_svg__SVGID_00000067928100187377319290000000356226790037339013_"><use xlink:href="#cookie-design_svg__SVGID_00000008833309255026634320000006800646372793849738_" style="overflow:visible"></use></clipPath><path d="M211.1 309c-6.9 3.1-14.2 5.7-21.9 7.6-10.9 2.6-21.2 3.8-31.1 3.8-7.5 0-14.7-.7-21.6-1.8 4.6 1.8 9.4 3.2 14.6 4.2 12.9 2.6 25.3 3.8 37.1 3.8 11.1 0 21.5-1.1 31.2-3-2.2-4.3-5-9.2-8.3-14.6" style="clip-path:url(#cookie-design_svg__SVGID_00000067928100187377319290000000356226790037339013_);fill:#e57750"></path><defs><path id="cookie-design_svg__SVGID_00000174570798169717106730000005775536465990597813_" d="M91.8 130.7c-17.6 10.4-33.1 19.4-43.4 60.5S50.5 295 91.6 327.9s117.1 18.5 145.9-8.2 52.8-61 44.2-111c-9.2-53.4-52.4-87.4-86.3-98.7-33.6-11.2-72.6 2.3-103.6 20.7"></path></defs><clipPath id="cookie-design_svg__SVGID_00000029037985308718391310000001299528412375769993_"><use xlink:href="#cookie-design_svg__SVGID_00000174570798169717106730000005775536465990597813_" style="overflow:visible"></use></clipPath><path d="M54.3 273.8c7.5 20.8 19.8 40.1 37.3 54.1 16.8 13.5 39.6 19 62.5 19 25.2 0 50.6-6.7 68.8-16.9-1-1.9-2.1-4.1-3.4-6.5-9.7 1.9-20.2 3-31.2 3-11.7 0-24.1-1.2-37.1-3.8-5.2-1-10.1-2.5-14.6-4.2-50.5-8.6-82.3-44.7-82.3-44.7" style="clip-path:url(#cookie-design_svg__SVGID_00000029037985308718391310000001299528412375769993_);fill:#e5674a"></path><path d="M77 179.6c-3.4 7.8 7.5 16.5 17.2 7.8 9.6-8.8-10.5-23.3-17.2-7.8" class="cookie-design_svg__st16"></path><path d="M88.5 175.8c-4.1 1 4.1 5.1 5.1 3.1s-3.1-3.1-4.1-3.1h-1z" class="cookie-design_svg__st17"></path><path d="M94.7 187.1s-.2.1-.5.1c0 0-.1 0-.1.1-2.9 2.6-5.9 3.6-8.5 3.6-.6 0-1.2-.1-1.8-.2-.1.8-.2 1.5-.4 2.3h.8c5.5.2 11.1-3.9 10.5-5.9" class="cookie-design_svg__st18"></path><path d="M82 173.7c-.6.2-10.8 4.4-5.8 14.4 1.7 3.4 4.4 4.8 7.2 5 .1-.8.2-1.5.4-2.3-5.4-1-8.9-6.3-6.8-11.2 1.3-3 3.1-4.9 5-5.9" class="cookie-design_svg__st19"></path><path d="M82.1 173.7s-.1 0 0 0c-2 1-3.8 2.9-5.1 5.9-2.1 4.9 1.4 10.2 6.8 11.2.6.1 1.2.2 1.8.2 2.7 0 5.7-1.1 8.5-3.6 0 0 .1 0 .1-.1-1 .3-3.3.9-5.8.9-2.6 0-5.4-.7-7.1-3.1-4.1-6.2.8-11.4.8-11.4" class="cookie-design_svg__st20"></path><path d="M92.4 277.2c-3.4 7.8 7.5 16.5 17.2 7.8 9.7-8.8-10.5-23.3-17.2-7.8" class="cookie-design_svg__st16"></path><path d="M103.9 273.5c-4.1 1 4.1 5.1 5.1 3.1 1-2.1-3.1-3.1-4.1-3.1h-1z" class="cookie-design_svg__st17"></path><path d="M110.1 284.8s-.2.1-.5.1c0 0-.1 0-.1.1-2.9 2.6-5.9 3.6-8.5 3.6-.6 0-1.2-.1-1.8-.2.5.8 1 1.5 1.6 2.3 5.1-.4 9.9-4.1 9.3-5.9m-12.7-13.5c-.3.1-3.4 1.4-5.5 4.1.2.4.4.9.6 1.3 1.4-2.7 3.1-4.4 4.9-5.4" class="cookie-design_svg__st19"></path><path d="M92 275.5c-1.7 2.3-2.7 5.7-.4 10.3 1.9 3.7 4.9 5 8 5 .4 0 .8 0 1.1-.1-.5-.8-1.1-1.5-1.6-2.3-5.4-1-8.9-6.3-6.8-11.2.1-.1.1-.3.2-.4-.1-.5-.3-.9-.5-1.3" style="fill:#d95c38"></path><path d="M97.5 271.3c-1.9 1-3.6 2.7-4.9 5.4-.1.1-.1.3-.2.4-2.1 4.9 1.4 10.2 6.8 11.2.6.1 1.2.2 1.8.2 2.7 0 5.7-1.1 8.5-3.6 0 0 .1 0 .1-.1-1 .3-3.3.9-5.8.9-2.6 0-5.4-.7-7.1-3.1-4.1-6.1.8-11.3.8-11.3" class="cookie-design_svg__st20"></path><path d="M209.6 295.7c-3.4 7.8 7.5 16.5 17.2 7.8 9.6-8.7-10.5-23.3-17.2-7.8" class="cookie-design_svg__st16"></path><path d="M221.1 292c-4.1 1 4.1 5.1 5.1 3.1s-3.1-3.1-4.1-3.1h-1z" class="cookie-design_svg__st17"></path><path d="M214.6 289.8c-.5.2-10.9 4.4-5.9 14.5 1 2 2.4 3.3 3.9 4.1 1.1-.5 2.1-1 3.1-1.5-5-1.3-8.3-6.4-6.2-11.1 1.3-3.1 3.1-4.9 5.1-6" class="cookie-design_svg__st18"></path><path d="M227.3 303.3s-.2.1-.5.1c0 0-.1 0-.1.1-2.9 2.6-5.9 3.6-8.5 3.6-.8 0-1.6-.1-2.4-.3-1 .5-2.1 1-3.1 1.5 1.3.7 2.7.9 4.2.9 5.4.1 11-4 10.4-5.9" class="cookie-design_svg__st19"></path><path d="M214.6 289.8c-2 1-3.8 2.9-5.1 5.9-2.1 4.8 1.2 9.9 6.2 11.1.8.2 1.6.3 2.4.3 2.7 0 5.7-1.1 8.5-3.6 0 0 .1 0 .1-.1-1 .3-3.3.9-5.8.9-2.6 0-5.4-.7-7.1-3.1-4-6.2.8-11.4.8-11.4" class="cookie-design_svg__st20"></path><path d="M240.4 213.5c-3.4 7.8 7.5 16.5 17.2 7.8 9.7-8.8-10.5-23.3-17.2-7.8" class="cookie-design_svg__st16"></path><path d="M251.9 209.7c-4.1 1 4.1 5.1 5.1 3.1s-3.1-3.1-4.1-3.1h-1z" class="cookie-design_svg__st17"></path><path d="M245.4 207.6c-.5.2-10.9 4.4-5.9 14.4 1.9 3.7 4.9 5 8 5 5.5 0 11.1-4.1 10.5-6 0 0-.2.1-.5.1l-.1.1c-2.9 2.6-5.9 3.6-8.5 3.6-6.4 0-11-5.9-8.6-11.4 1.4-2.9 3.2-4.8 5.1-5.8" class="cookie-design_svg__st18"></path><path d="M245.5 207.6c-2 1-3.8 2.9-5.1 5.9-2.4 5.5 2.3 11.4 8.6 11.4 2.7 0 5.7-1.1 8.5-3.6l.1-.1c-1 .3-3.3.9-5.8.9-2.6 0-5.4-.7-7.1-3.1-4.1-6.2.8-11.4.8-11.4" class="cookie-design_svg__st20"></path><path d="M172.6 131.3c-3.4 7.8 7.5 16.5 17.2 7.8 9.6-8.8-10.5-23.3-17.2-7.8" class="cookie-design_svg__st16"></path><path d="M184.1 127.5c-4.1 1 4.1 5.1 5.1 3.1 1-2.1-3.1-3.1-4.1-3.1h-1z" class="cookie-design_svg__st17"></path><path d="M170.9 131.6c-.8 2.1-.9 4.8.8 8.2 1.9 3.7 4.9 5 8 5 5.5 0 11.1-4.1 10.5-6 0 0-.2.1-.5.1 0 0-.1 0-.1.1-2.9 2.6-5.9 3.6-8.5 3.6-6.1 0-10.7-5.5-8.9-10.9-.3.1-.8 0-1.3-.1" class="cookie-design_svg__st18"></path><path d="M177.6 125.4c-.4.1-5 2.1-6.7 6.2.5.1.9.1 1.4.2.1-.2.1-.4.2-.6 1.3-2.9 3.1-4.8 5.1-5.8" style="fill:#e69754"></path><path d="M177.6 125.4c-2 1-3.8 2.9-5.1 5.9-.1.2-.1.4-.2.6-1.8 5.3 2.7 10.9 8.9 10.9 2.7 0 5.7-1.1 8.5-3.6 0 0 .1 0 .1-.1-1 .3-3.3.9-5.8.9-2.6 0-5.4-.7-7.1-3.1-4.1-6.3.7-11.5.7-11.5" class="cookie-design_svg__st20"></path><path d="M77 179.6c-3.4 7.8 7.5 16.5 17.2 7.8 9.6-8.8-10.5-23.3-17.2-7.8z" class="cookie-design_svg__st16"></path><path d="M88.5 175.8c-4.1 1 4.1 5.1 5.1 3.1s-3.1-3.1-4.1-3.1h-1z" class="cookie-design_svg__st17"></path><path d="M82.1 173.7s-11 4.2-5.9 14.5 19.5 2.1 18.5-1c0 0-9.7 3.4-13.4-2.1-4.1-6.2.8-11.4.8-11.4z" class="cookie-design_svg__st23"></path><path d="M92.4 277.2c-3.4 7.8 7.5 16.5 17.2 7.8s-10.5-23.3-17.2-7.8z" class="cookie-design_svg__st16"></path><path d="M103.9 273.5c-4.1 1 4.1 5.1 5.1 3.1 1-2.1-3.1-3.1-4.1-3.1h-1z" class="cookie-design_svg__st17"></path><path d="M97.5 271.3s-11 4.2-5.9 14.5 19.5 2.1 18.5-1c0 0-9.7 3.4-13.4-2.1-4.1-6.2.8-11.4.8-11.4z" class="cookie-design_svg__st23"></path><path d="M209.6 295.7c-3.4 7.8 7.5 16.5 17.2 7.8 9.6-8.7-10.5-23.3-17.2-7.8z" class="cookie-design_svg__st16"></path><path d="M221.1 292c-4.1 1 4.1 5.1 5.1 3.1 1-2.1-3.1-3.1-4.1-3.1h-1z" class="cookie-design_svg__st17"></path><path d="M214.6 289.8s-11 4.2-5.9 14.5 19.5 2.1 18.5-1c0 0-9.7 3.4-13.4-2.1-4-6.2.8-11.4.8-11.4z" class="cookie-design_svg__st23"></path><path d="M240.4 213.5c-3.4 7.8 7.5 16.5 17.2 7.8 9.6-8.8-10.5-23.3-17.2-7.8z" class="cookie-design_svg__st16"></path><path d="M251.9 209.7c-4.1 1 4.1 5.1 5.1 3.1s-3.1-3.1-4.1-3.1h-1z" class="cookie-design_svg__st17"></path><path d="M245.5 207.6s-11 4.2-5.9 14.5 19.5 2.1 18.5-1c0 0-9.7 3.4-13.4-2.1-4.1-6.2.8-11.4.8-11.4z" class="cookie-design_svg__st23"></path><path d="M172.6 131.3c-3.4 7.8 7.5 16.5 17.2 7.8 9.6-8.8-10.5-23.3-17.2-7.8z" class="cookie-design_svg__st16"></path><path d="M184.1 127.5c-4.1 1 4.1 5.1 5.1 3.1 1-2.1-3.1-3.1-4.1-3.1h-1z" class="cookie-design_svg__st17"></path><path d="M177.6 125.4s-11 4.2-5.9 14.5 19.5 2.1 18.5-1c0 0-9.7 3.4-13.4-2.1-4-6.2.8-11.4.8-11.4z" class="cookie-design_svg__st23"></path><path d="M134 197.6c-12.2 1.6-16.3 10.1-11.4 13.3 4.8 3.2 5.8-2.2 11.9-3.5 6-1.2 10.1 2.9 14.1-.2 5.4-4.2-.3-11.4-14.6-9.6z" class="cookie-design_svg__st24"></path><circle cx="146.5" cy="203.2" r="3.6" class="cookie-design_svg__st25"></circle><path d="M195.4 185.1c-12.2 1.6-16.3 10.1-11.4 13.3 4.9 3.2 5.8-2.2 11.9-3.5 6-1.2 10.1 2.9 14.1-.2 5.4-4.2-.3-11.4-14.6-9.6z" class="cookie-design_svg__st24"></path><circle cx="208" cy="190.8" r="3.6" class="cookie-design_svg__st25"></circle><path d="M167 203.6c-4.3 0-5.8-2.9-8.7-1.4-2.9 1.4 1.4 7.2 8.7 7.2s10.1-5.8 8.7-7.2c-2.3-2.4-4.3 1.4-8.7 1.4z" class="cookie-design_svg__st24"></path><ellipse cx="120" cy="216.6" class="cookie-design_svg__st26" rx="8" ry="4.3"></ellipse><ellipse cx="219.8" cy="194.9" class="cookie-design_svg__st26" rx="8" ry="4.3" transform="rotate(-30 219.83 194.885)"></ellipse><path d="M142.4 179s-7.2 1.4-8.7 5.8m52.1-11.6s7.2 0 10.1 4.3" style="fill:none;stroke:#8e2929;stroke-width:2.8937;stroke-linecap:round;stroke-miterlimit:10"></path><path d="M71.8 144.7s36.7-36.7 68.5-33.9-20.8 17.8-20.8 17.8l-2.5 7.5-45.2 8.6z" class="cookie-design_svg__st28"></path><path d="M116.3 127.5s19.7 4.5 54.1 4 64.5-3 77.1 7.1c0 0-55.2-37.6-77.7-35.1s-49.2 10.4-53.5 24z" class="cookie-design_svg__st28"></path><ellipse cx="158.9" cy="381.9" class="cookie-design_svg__st0" rx="100.2" ry="9.8"></ellipse><path d="M229.4 254.5c-34.9-16.9-68.9-3.5-67.6 8.7 1.3 12.2 21.4 10.3 17.1 14.7-4.6 4.7-19.7-4.3-10.6 4.7 7.1 7.1 24.1 12.7 46.7 7s36.1-24.6 14.4-35.1zm-47.5 18.3c-7.3-.7-1.7-8.3 4.3-5.3s.1 5.7-4.3 5.3z" style="fill:#ead3b5"></path><path d="M198.1 261.5c9 .5 21.3-2.7 8.9-6.3-12.4-3.7-24 5.4-8.9 6.3z" style="fill:#150065"></path><path d="M214 271.5c8.5.5 20.1-2.9 8.4-6.6s-22.6 5.7-8.4 6.6z" class="cookie-design_svg__st31"></path><path d="M83.1 275.3s25 25.1 50.2 25.1c20.1 0 30.1-32.6 47.6-27.6" class="cookie-design_svg__st4"></path><path d="M119.5 133.6s-37.6 70.2-60.2 82.8-22.6 10-22.6 10-4.3-64.9 34.2-83.9 48.6-8.9 48.6-8.9z" class="cookie-design_svg__st28"></path><path d="M89.4 158.7s-15.1 32.6-35.1 42.6c0 .1 32.6-30.1 35.1-42.6z" style="fill:#c45a3d"></path><path d="M76.8 131.1s-15 15.1-5 15.1 59.2-12.7 76-22.6 19.3-25-23.3-15-47.7 22.5-47.7 22.5z" class="cookie-design_svg__st33"></path><path d="M76.8 138.6S59.2 111 69.3 111s25.1-7.5 27.6-12.5 10-7.5 17.6-7.5c7.5 0 17.6 15.1 20.1 17.6 2.4 2.5-35.2 27.5-57.8 30z" style="fill:#bf9773"></path><path d="M76.8 138.6s40.1-10 52.7-17.6c12.5-7.5 5-12.5 5-12.5l-3.6-4.4s3.6 4.4-8.9 11.9-48.8 15.8-48.8 15.8l3.6 6.8z" class="cookie-design_svg__st31"></path><path d="M85.6 106.8s13.9-.8 18.9-5.8-12.7 1.6-18.9 5.8z" class="cookie-design_svg__st33"></path></g></svg>
								<div>
									<h2 class="mt-1 text-base font-semibold leading-6 text-gray-900" x-text="configurationId === 'all' ? '<?php esc_attr_e( 'Default configuration', 'axeptio-wordpress-plugin' ); ?>' : configurationId">
									</h2>
									<div class="text-sm leading-6 text-gray-500">
										<?php esc_html_e( 'Axeptio allows you to fine-tune how you want your extensions to act based on consent or non-consent of cookie rules through our widget. You can set up the configuration globally (Default Configuration) or according to the version of your project.', 'axeptio-wordpress-plugin' ); ?>
									</div>
								</div>
							</div>
							<div class="flex items-center gap-x-4 sm:gap-x-6">
								<div>
									<label for="project-versions" class="block text-sm font-medium leading-6 text-gray-900 min-w-[18rem]">
										<?php esc_html_e( 'Project version', 'axeptio-wordpress-plugin' ); ?>
									</label>
									<select x-model="configurationId" @change="fetchPlugins()" id="project-versions" name="location" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-amber-400 sm:text-sm sm:leading-6">
										<option
											value="all"
											:selected="configurationId === 'all'"
										><?php esc_html_e( 'Default configuration', 'axeptio-wordpress-plugin' ); ?></option>
										<template x-for="option in projectVersions" :key="option.value">
											<option
												:value="option.value"
												x-text="option.text"
												:selected="option.value === configurationId"
											></option>
										</template>
									</select>

								</div>
							</div>
						</div>
					</div>
				</header>

				<div>
					<?php \Axeptio\Plugin\get_template_part( 'admin/sections/plugins' ); ?>
				</div>
			</div>
			<?php do_action( 'axeptio/after_plugin_manager' ); ?>
		</div>
		<?php do_action( 'axeptio/after_plugin_manager_container' ); ?>
		<?php \Axeptio\Plugin\get_template_part( 'admin/plugins/fields/edit' ); ?>
		<?php \Axeptio\Plugin\get_template_part( 'admin/plugins/fields/modal-delete' ); ?>
	</div>
</div>
