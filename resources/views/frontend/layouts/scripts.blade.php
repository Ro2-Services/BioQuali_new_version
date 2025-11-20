<!-- JavaScript -->
<script>
    // Mobile bottom navigation active state
    document.addEventListener('DOMContentLoaded', function() {
        const navItems = document.querySelectorAll('.nav-item');
        const moreBtn = document.getElementById('mobile-more-btn');
        const moreMenu = document.getElementById('mobile-more-menu');
        
        navItems.forEach(item => {
            item.addEventListener('click', function(e) {
                if (!this.classList.contains('analyses-btn') && this.id !== 'mobile-more-btn') {
                    navItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                    moreMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                    moreMenu.classList.add('opacity-0', 'invisible', 'translate-y-10');
                }
            });
        });

        // More menu toggle
        moreBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            if (moreMenu.classList.contains('invisible')) {
                moreMenu.classList.remove('opacity-0', 'invisible', 'translate-y-10');
                moreMenu.classList.add('opacity-100', 'visible', 'translate-y-0');
            } else {
                moreMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                moreMenu.classList.add('opacity-0', 'invisible', 'translate-y-10');
            }
        });

        // Close more menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!moreMenu.contains(e.target) && e.target !== moreBtn) {
                moreMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                moreMenu.classList.add('opacity-0', 'invisible', 'translate-y-10');
            }
        });

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        document.querySelectorAll('section h2, section p, .bg-light, .glass').forEach(el => {
            observer.observe(el);
        });
    });
</script>