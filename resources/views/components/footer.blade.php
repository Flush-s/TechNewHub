<footer class="bg-white dark:bg-gray-900 py-12 border-t border-gray-200 dark:border-gray-800">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
			<!-- О нас -->
			<div>
				<h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">О нас</h3>
				<p class="text-gray-600 dark:text-gray-400 text-sm">
					TechNewsHub - ваш надежный источник новостей и аналитики в мире технологий
				</p>
			</div>

			<!-- Разделы -->
			<div>
				<h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Разделы</h3>
				<ul class="space-y-3">
					<li><a href=""
							class="text-gray-600 dark:text-gray-400 text-sm hover:text-gray-900 dark:hover:text-white transition-colors">Новости</a>
					</li>
					<li><a href=""
							class="text-gray-600 dark:text-gray-400 text-sm hover:text-gray-900 dark:hover:text-white transition-colors">Аналитика</a>
					</li>
					<li><a href=""
							class="text-gray-600 dark:text-gray-400 text-sm hover:text-gray-900 dark:hover:text-white transition-colors">Гаджеты</a>
					</li>
					<li><a href=""
							class="text-gray-600 dark:text-gray-400 text-sm hover:text-gray-900 dark:hover:text-white transition-colors">Обзоры</a>
					</li>
				</ul>
			</div>

			<!-- Контакты -->
			<div>
				<h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Контакты</h3>
				<ul class="space-y-3">
					<li><a href=""
							class="text-gray-600 dark:text-gray-400 text-sm hover:text-gray-900 dark:hover:text-white transition-colors">О
							проекте</a></li>
					<li><a href=""
							class="text-gray-600 dark:text-gray-400 text-sm hover:text-gray-900 dark:hover:text-white transition-colors">Реклама</a>
					</li>
					<li><a href=""
							class="text-gray-600 dark:text-gray-400 text-sm hover:text-gray-900 dark:hover:text-white transition-colors">Контакты</a>
					</li>
				</ul>
			</div>

			<!-- Подписка -->
			<div>
				<h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Подписка</h3>
				<p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
					Подпишитесь на нашу рассылку, чтобы получать последние новости
				</p>
				<form action="" method="POST" class="space-y-3">
					@csrf
					<input type="email" name="email" placeholder="Ваш email" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-md text-sm 
                               bg-white dark:bg-gray-800 text-gray-900 dark:text-white
                               focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                               placeholder-gray-500 dark:placeholder-gray-400" required>
					<button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md text-sm 
                               hover:bg-blue-700 dark:hover:bg-blue-500
                               focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                               dark:focus:ring-offset-gray-900">
						Подписаться
					</button>
				</form>
			</div>
		</div>

		<!-- Copyright -->
		<div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-800">
			<p class="text-center text-gray-500 dark:text-gray-400 text-sm">
				© {{ date('Y') }} TechNewsHub. Все права защищены.
			</p>
		</div>
	</div>
</footer>