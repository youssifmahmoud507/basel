<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Souqak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    >
    <link rel="stylesheet" href="./nav/styleindex.css">
    <link rel="stylesheet" href="./countainer.css">

</head>

<body>

    <main>
        <nav>
            <div class="logoTxt">
                <h1>Sou<span>Q</span>ak</h1>
            </div>
            <div class="navbar-toggle">☰</div>
            <div class="sidebar">
                <a href="#">Home</a>
                <a href="#">Contact</a>
                <a href="#">About</a>
                <a href="#">Signup</a>
                <form class="searchbar">
                    <input id="search" type="search" placeholder="Search..." required>
                </form>
            </div>
        </nav>

        <div class="frame1_opning">
            <div class="container_frame1">
                <div class="item">
                    <div class="item_categores ">
                        <p>Woman’s Fashion</p>
                    </div>
                    <div class="item_categores">
                        <p>Men’s Fashion</p>
                    </div>
                    <div class="item_categores">
                        <p>Electronics</p>
                    </div>
                    <div class="item_categores">
                        <p>Home & Lifestyle</p>
                    </div>
                    <div class="item_categores">
                        <p>Sports & Outdoor</p>
                    </div>
                    <div class="item_categores">
                        <p>Medicine</p>
                    </div>
                    <div class="item_categores">
                        <p>Baby’s & Toys</p>
                    </div>
                    <div class="item_categores">
                        <p>Groceries & Pets</p>
                    </div>
                </div>

                <div class="item slider-container">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/photos/iphone.png" class="d-block w-100" alt="Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="/photos/Screenshot 2025-03-13 162637.png" class="d-block w-100" alt="Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="" class="d-block w-100" alt="Image 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <section class="flash-sales-section">
            <div class="flash-sales-container">
                <div class="content-section">
                    <div class="title-section">
                        <div class="today-label">
                            <div class="red-indicator"></div>
                            <span class="today-text">Today's</span>
                        </div>
                        <h2 class="flash-sales-title">Flash Sales</h2>
                    </div>

                    <div class="countdown-timer">
                        <div class="time-unit">
                            <span class="unit-label">Days</span>
                            <span class="unit-value" id="days">02</span>
                        </div>

                        <div class="separator">
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>

                        <div class="time-unit">
                            <span class="unit-label">Hours</span>
                            <span class="unit-value" id="hours">23</span>
                        </div>

                        <div class="separator">
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>

                        <div class="time-unit">
                            <span class="unit-label">Minutes</span>
                            <span class="unit-value" id="minutes">19</span>
                        </div>

                        <div class="separator">
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>

                        <div class="time-unit">
                            <span class="unit-label">Seconds</span>
                            <span class="unit-value" id="seconds">00</span>
                        </div>
                    </div>
                </div>

                <div class="nav-controls">
                    <button class="nav-button prev-button">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="nav-button next-button">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- منتجات العروض السريعة -->
            <div class="products-grid" id="flash-products">
                <!-- سيتم إضافة المنتجات هنا بواسطة JavaScript في ملف كونتينر -->
            </div>


        </section>



        <div class="container">
            <!-- View All Products Button -->
            <div class="view-all-container">
                <button class="view-all-btn">View All Products</button>
            </div>

            <!-- Divider -->
            <div class="divider"></div>

            <!-- Categories Section -->
            <div class="category-label">
                <div class="category-indicator"></div>
                <div class="category-text">Categories</div>
            </div>

            <div class="section-header">
                <h2 class="section-title">Browse By Category</h2>
                <div class="navigation-arrows">
                    <button class="nav-arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 18L9 12L15 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="nav-arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 2H10C8.9 2 8 2.9 8 4V28C8 29.1 8.9 30 10 30H22C23.1 30 24 29.1 24 28V4C24 2.9 23.1 2 22 2ZM22 24H10V8H22V24Z" stroke="black" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div class="category-name">Phones</div>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28 20H4V8C4 6.89543 4.89543 6 6 6H26C27.1046 6 28 6.89543 28 8V20Z" stroke="black" stroke-width="1.5" />
                            <path d="M12 26H20" stroke="black" stroke-width="1.5" />
                            <path d="M16 20V26" stroke="black" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div class="category-name">Computers</div>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="8" y="8" width="16" height="16" rx="8" stroke="black" stroke-width="1.5" />
                            <path d="M16 12V16L18 18" stroke="black" stroke-width="1.5" />
                            <path d="M16 4V8" stroke="black" stroke-width="1.5" />
                            <path d="M16 24V28" stroke="black" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div class="category-name">SmartWatch</div>
                </div>
                <div class="category-card active">
                    <div class="category-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="8" width="24" height="16" rx="2" stroke="white" stroke-width="1.5" />
                            <circle cx="16" cy="16" r="5" stroke="white" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div class="category-name">Camera</div>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 16C6 9.37258 11.3726 4 18 4V4C24.6274 4 30 9.37258 30 16V22C30 24.2091 28.2091 26 26 26H18C11.3726 26 6 20.6274 6 14V16Z" stroke="black" stroke-width="1.5" />
                            <path d="M2 14H6" stroke="black" stroke-width="1.5" />
                            <path d="M2 18H6" stroke="black" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div class="category-name">HeadPhones</div>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="8" width="24" height="16" rx="2" stroke="black" stroke-width="1.5" />
                            <path d="M10 14H14" stroke="black" stroke-width="1.5" stroke-linecap="round" />
                            <circle cx="22" cy="14" r="2" stroke="black" stroke-width="1.5" />
                            <circle cx="22" cy="18" r="2" stroke="black" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div class="category-name">Gaming</div>
                </div>
            </div>

            <!-- Divider -->
            <div class="divider"></div>

            <!-- Products Section -->
            <div class="this-month">
                <div class="month-indicator"></div>
                <div class="month-text">This Month</div>
            </div>

            <div class="products-header">
                <h2 class="products-title">Best Selling Products</h2>
                <button class="view-all-btn">View All</button>
            </div>

            <div class="products-grid">
                <div class="product-card">
                    <img src="/api/placeholder/300/300" alt="The north coat" class="product-image">
                    <div class="product-actions">
                        <button class="action-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.35L10.55 20.03C5.4 15.36 2 12.28 2 8.5C2 5.42 4.42 3 7.5 3C9.24 3 10.91 3.81 12 5.09C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.42 22 8.5C22 12.28 18.6 15.36 13.45 20.04L12 21.35Z" stroke="black" stroke-width="1.5" />
                            </svg>
                        </button>
                        <button class="action-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6C13.1046 6 14 5.10457 14 4C14 2.89543 13.1046 2 12 2C10.8954 2 10 2.89543 10 4C10 5.10457 10.8954 6 12 6Z" stroke="black" stroke-width="1.5" />
                                <path d="M12 22C13.1046 22 14 21.1046 14 20C14 18.8954 13.1046 18 12 18C10.8954 18 10 18.8954 10 20C10 21.1046 10.8954 22 12 22Z" stroke="black" stroke-width="1.5" />
                                <path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" stroke="black" stroke-width="1.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">The north coat</h3>
                        <div class="product-price">
                            <span class="current-price">$260</span>
                            <span class="original-price">$360</span>
                        </div>
                        <div class="product-rating">
                            ★★★★★ <span>(65)</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="/api/placeholder/300/300" alt="Gucci duffle bag" class="product-image">
                    <div class="product-actions">
                        <button class="action-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.35L10.55 20.03C5.4 15.36 2 12.28 2 8.5C2 5.42 4.42 3 7.5 3C9.24 3 10.91 3.81 12 5.09C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.42 22 8.5C22 12.28 18.6 15.36 13.45 20.04L12 21.35Z" stroke="black" stroke-width="1.5" />
                            </svg>
                        </button>
                        <button class="action-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6C13.1046 6 14 5.10457 14 4C14 2.89543 13.1046 2 12 2C10.8954 2 10 2.89543 10 4C10 5.10457 10.8954 6 12 6Z" stroke="black" stroke-width="1.5" />
                                <path d="M12 22C13.1046 22 14 21.1046 14 20C14 18.8954 13.1046 18 12 18C10.8954 18 10 18.8954 10 20C10 21.1046 10.8954 22 12 22Z" stroke="black" stroke-width="1.5" />
                                <path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" stroke="black" stroke-width="1.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Gucci duffle bag</h3>
                        <div class="product-price">
                            <span class="current-price">$960</span>
                            <span class="original-price">$1160</span>
                        </div>
                        <div class="product-rating">
                            ★★★★★ <span>(65)</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="/api/placeholder/300/300" alt="RGB liquid CPU Cooler" class="product-image">
                    <div class="product-actions">
                        <button class="action-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.35L10.55 20.03C5.4 15.36 2 12.28 2 8.5C2 5.42 4.42 3 7.5 3C9.24 3 10.91 3.81 12 5.09C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.42 22 8.5C22 12.28 18.6 15.36 13.45 20.04L12 21.35Z" stroke="black" stroke-width="1.5" />
                            </svg>
                        </button>
                        <button class="action-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6C13.1046 6 14 5.10457 14 4C14 2.89543 13.1046 2 12 2C10.8954 2 10 2.89543 10 4C10 5.10457 10.8954 6 12 6Z" stroke="black" stroke-width="1.5" />
                                <path d="M12 22C13.1046 22 14 21.1046 14 20C14 18.8954 13.1046 18 12 18C10.8954 18 10 18.8954 10 20C10 21.1046 10.8954 22 12 22Z" stroke="black" stroke-width="1.5" />
                                <path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" stroke="black" stroke-width="1.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">RGB liquid CPU Cooler</h3>
                        <div class="product-price">
                            <span class="current-price">$160</span>
                            <span class="original-price">$170</span>
                        </div>
                        <div class="product-rating">
                            ★★★★★ <span>(65)</span>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <img src="/api/placeholder/300/300" alt="Small BookSelf" class="product-image">
                    <div class="product-actions">
                        <button class="action-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21.35L10.55 20.03C5.4 15.36 2 12.28 2 8.5C2 5.42 4.42 3 7.5 3C9.24 3 10.91 3.81 12 5.09C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.42 22 8.5C22 12.28 18.6 15.36 13.45 20.04L12 21.35Z" stroke="black" stroke-width="1.5" />
                            </svg>
                        </button>
                        <button class="action-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6C13.1046 6 14 5.10457 14 4C14 2.89543 13.1046 2 12 2C10.8954 2 10 2.89543 10 4C10 5.10457 10.8954 6 12 6Z" stroke="black" stroke-width="1.5" />
                                <path d="M12 22C13.1046 22 14 21.1046 14 20C14 18.8954 13.1046 18 12 18C10.8954 18 10 18.8954 10 20C10 21.1046 10.8954 22 12 22Z" stroke="black" stroke-width="1.5" />
                                <path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" stroke="black" stroke-width="1.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Small BookSelf</h3>
                        <div class="product-price">
                            <span class="current-price">$360</span>
                        </div>
                        <div class="product-rating">
                            ★★★★★ <span>(65)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <section class=" container-pro">
            <div class="container-pro">
                <!-- Product Section -->
                <div class="header-tag">Our Products</div>
                <div class="section-header">
                    <h1>Explore Our Products</h1>
                    <div class="nav-arrows">
                        <div class="nav-arrow">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                        <div class="nav-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="products-grid">
                    <!-- Product 1 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/200x200" alt="Breed Dry Dog Food">
                            <div class="product-actions">
                                <div class="action-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="far fa-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Breed Dry Dog Food</div>
                            <span class="product-price">$100</span>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="review-count">(45)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/200x200" alt="CANON EOS DSLR Camera">
                            <div class="product-actions">
                                <div class="action-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="far fa-eye"></i>
                                </div>
                            </div>
                        </div>
                        <button class="add-to-cart">Add To Cart</button>
                        <div class="product-info">
                            <div class="product-name">CANON EOS DSLR Camera</div>
                            <span class="product-price">$360</span>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="review-count">(96)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/200x200" alt="ASUS FHD Gaming Laptop">
                            <div class="product-actions">
                                <div class="action-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="far fa-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-name">ASUS FHD Gaming Laptop</div>
                            <span class="product-price">$700</span>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="review-count">(325)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/200x200" alt="Curology Product Set">
                            <div class="product-actions">
                                <div class="action-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="far fa-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Curology Product Set</div>
                            <span class="product-price">$500</span>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="review-count">(145)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="product-card">
                        <div class="product-image">
                            <div class="product-tag">NEW</div>
                            <img src="https://via.placeholder.com/200x200" alt="Kids Electric Car">
                            <div class="product-actions">
                                <div class="action-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="far fa-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Kids Electric Car</div>
                            <span class="product-price">$960</span>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="review-count">(65)</span>
                            </div>
                            <div class="color-options">
                                <div class="color-option" style="background-color: #FF0000;"></div>
                                <div class="color-option" style="background-color: #000000;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/200x200" alt="Jr. Zoom Soccer Cleats">
                            <div class="product-actions">
                                <div class="action-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="far fa-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Jr. Zoom Soccer Cleats</div>
                            <span class="product-price">$1160</span>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="review-count">(35)</span>
                            </div>
                            <div class="color-options">
                                <div class="color-option" style="background-color: #FF0000;"></div>
                                <div class="color-option" style="background-color: #FFFF00;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 7 -->
                    <div class="product-card">
                        <div class="product-image">
                            <div class="product-tag">NEW</div>
                            <img src="https://via.placeholder.com/200x200" alt="GP11 Shooter USB Gamepad">
                            <div class="product-actions">
                                <div class="action-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="far fa-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-name">GP11 Shooter USB Gamepad</div>
                            <span class="product-price">$660</span>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="review-count">(55)</span>
                            </div>
                            <div class="color-options">
                                <div class="color-option" style="background-color: #000000;"></div>
                                <div class="color-option" style="background-color: #FF0000;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 8 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://via.placeholder.com/200x200" alt="Quilted Satin Jacket">
                            <div class="product-actions">
                                <div class="action-icon">
                                    <i class="far fa-heart"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="far fa-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Quilted Satin Jacket</div>
                            <span class="product-price">$660</span>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="review-count">(95)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#" class="view-all-btn">View All Products</a>

                <!-- Featured Section -->
                <div class="featured-tag">Featured</div>
                <h2>New Arrival</h2>

                <div class="featured-grid">
                    <!-- Featured Item 1 - PlayStation -->
                    <div class="featured-item large">
                        <img src="https://via.placeholder.com/600x650/000000/ffffff" alt="PlayStation 5">
                        <div class="featured-content">
                            <h3>PlayStation 5</h3>
                            <p>Black and White version of the PS5<br>coming out on sale.</p>
                            <a href="#" class="shop-now-btn">Shop Now</a>
                        </div>
                    </div>

                    <div class="small-featured-grid">
                        <!-- Featured Item 2 - Women's Collections -->
                        <div class="small-featured-item">
                            <img src="https://via.placeholder.com/300x200/000000/ffffff" alt="Women's Collections">
                            <div class="featured-content">
                                <h3>Women's Collections</h3>
                                <p>Featured women collections that<br>give you another vibe.</p>
                                <a href="#" class="shop-now-btn">Shop Now</a>
                            </div>
                        </div>

                        <!-- Featured Item 3 - Speakers -->
                        <div class="small-featured-item">
                            <img src="https://via.placeholder.com/300x200/000000/ffffff" alt="Speakers">
                            <div class="featured-content">
                                <h3>Speakers</h3>
                                <p>Amazon wireless speakers</p>
                                <a href="#" class="shop-now-btn">Shop Now</a>
                            </div>
                        </div>

                        <!-- Featured Item 4 - Perfume -->
                        <div class="small-featured-item">
                            <img src="https://via.placeholder.com/300x200/000000/ffffff" alt="Perfume">
                            <div class="featured-content">
                                <h3>Perfume</h3>
                                <p>GUCCI INTENSE OUD EDP</p>
                                <a href="#" class="shop-now-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Section -->
                <div class="features-section">
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h3>FREE AND FAST DELIVERY</h3>
                        <p>Free delivery for all orders over $140</p>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>24/7 CUSTOMER SERVICE</h3>
                        <p>Friendly 24/7 customer support</p>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>MONEY BACK GUARANTEE</h3>
                        <p>We return money within 30 days</p>
                    </div>
                </div>
            </div>

            <!-- Back to top button -->
            <div class="back-to-top">
                <i class="fas fa-arrow-up"></i>
            </div>


        </section>



















        <footer>
            <div class="countner"></div>
            <div class="footer_item">
                <div class="logoTxt">
                    <h1>Sou<span>Q</span>ak</h1>
                </div>
                <div class="grid-container">
                    <a href="#">Souqak</a>
                    <a href="#">Account</a>
                    <a href="#">Download App</a>
                    <a href="#">Subscribe</a>
                    <a href="#">My Account</a>
                    <a href="#">Save $3 with App New User Only</a>
                    <a href="#">Get 10% off your first order</a>
                    <a href="#">Login / Register</a>
                    <a href="#">Enter your email</a>
                    <a href="#">Cart</a>
                    <a href="#">Wishlist</a>
                    <a href="#">Shop</a>
                </div>
        </footer>

    </main>

    <script src="./nav/NAV.JS"></script>
    <script src="./js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/container.js"></script>

    <script src="./js/Flash Sales.js"></script> <!-- <img src="" alt=""> -->
</body>

</html>
<<<<<<< HEAD
    <!-- لaamkkamkma;klsmks;ksm hhhhash-->
    =======
    >>>>>>> d4e980ea36b9ab6fbcb257273162dea38e17b495