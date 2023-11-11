@extends('layouts.admin')

@section('page-title', 'wallet')

@section('content')
    <div class="row my-4">
        <div class="col d-flex align-items-center mt-4">
            <h1 style="font-family: 'Kanit', sans-serif;" class="text-white flex-grow-1 m-0">
                {{ __('Wallet') }}
            </h1>
        </div>
    </div>

    <div class="d-flex gap-5">
        <div id="bank-account">
            <div class="card-id567">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -0.5 29 29" shape-rendering="crispEdges">
                    <path stroke="#000000"
                        d="M0 0h7M8 0h2M14 0h1M16 0h5M22 0h7M0 1h1M6 1h1M13 1h1M17 1h2M22 1h1M28 1h1M0 2h1M2 2h3M6 2h1M8 2h1M11 2h4M18 2h1M20 2h1M22 2h1M24 2h3M28 2h1M0 3h1M2 3h3M6 3h1M8 3h2M11 3h1M13 3h1M15 3h5M22 3h1M24 3h3M28 3h1M0 4h1M2 4h3M6 4h1M8 4h4M13 4h1M15 4h1M19 4h1M22 4h1M24 4h3M28 4h1M0 5h1M6 5h1M9 5h1M12 5h2M17 5h4M22 5h1M28 5h1M0 6h7M8 6h1M10 6h1M12 6h1M14 6h1M16 6h1M18 6h1M20 6h1M22 6h7M9 7h1M11 7h1M15 7h6M0 8h4M6 8h1M8 8h1M13 8h2M17 8h3M21 8h1M24 8h3M28 8h1M2 9h1M4 9h2M7 9h1M9 9h1M14 9h1M16 9h1M19 9h2M22 9h3M28 9h1M0 10h5M6 10h1M8 10h1M13 10h1M16 10h1M18 10h1M20 10h1M22 10h3M26 10h2M1 11h1M3 11h2M7 11h1M11 11h4M16 11h1M18 11h1M20 11h5M28 11h1M1 12h3M5 12h2M9 12h1M11 12h1M13 12h5M19 12h1M25 12h2M0 13h2M3 13h3M8 13h1M10 13h2M14 13h1M16 13h2M19 13h2M22 13h2M26 13h3M0 14h1M2 14h1M4 14h3M9 14h2M12 14h1M14 14h1M16 14h1M19 14h3M23 14h2M26 14h3M0 15h2M3 15h2M8 15h1M12 15h1M14 15h3M20 15h1M22 15h3M27 15h1M0 16h1M2 16h3M6 16h1M10 16h2M18 16h1M20 16h2M24 16h2M27 16h1M1 17h2M4 17h1M7 17h3M12 17h1M14 17h2M18 17h1M20 17h2M23 17h1M25 17h3M0 18h1M3 18h1M6 18h1M8 18h5M15 18h2M23 18h1M26 18h1M2 19h4M12 19h1M14 19h1M16 19h2M19 19h3M26 19h1M1 20h1M3 20h1M6 20h7M14 20h2M17 20h10M8 21h3M12 21h1M18 21h1M20 21h1M24 21h5M0 22h7M9 22h6M19 22h2M22 22h1M24 22h2M27 22h1M0 23h1M6 23h1M9 23h1M13 23h3M18 23h1M20 23h1M24 23h2M27 23h1M0 24h1M2 24h3M6 24h1M10 24h1M12 24h1M14 24h4M20 24h5M26 24h3M0 25h1M2 25h3M6 25h1M8 25h1M11 25h2M15 25h2M19 25h3M24 25h2M28 25h1M0 26h1M2 26h3M6 26h1M8 26h1M10 26h2M13 26h1M21 26h1M23 26h1M26 26h1M28 26h1M0 27h1M6 27h1M8 27h1M11 27h1M14 27h1M16 27h1M18 27h3M23 27h1M25 27h1M27 27h1M0 28h7M8 28h1M14 28h3M19 28h2M25 28h1M27 28h1">
                    </path>
                </svg>

                <div class="prompt-id567">
                    <div class="token-container">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="50"
                            width="50">
                            <path fill="url(#paint0_linear_713_51)"
                                d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18V18ZM10 5.05L14.95 10L10 14.95L5.05 10L10 5.05V5.05ZM10 7.879L7.879 10L10 12.121L12.121 10L10 7.879V7.879Z">
                            </path>
                            <defs>
                                <linearGradient gradientUnits="userSpaceOnUse" y2="22.6007" x2="16.4204" y1="0"
                                    x1="0" id="paint0_linear_713_51">
                                    <stop stop-color="#AF40FF"></stop>
                                    <stop stop-color="#5B42F3" offset="0.5"></stop>
                                    <stop stop-color="#00DDEB" offset="1"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="blurry-splash"></div>
                    <p>accedi al tuo<br><span class="bold-567">Bank Account</span> </p>
                </div>
            </div>
        </div>

        <div id="mastercard">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="heading_8264">MASTERCARD</p>
                        <svg class="logo" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36"
                            viewBox="0 0 48 48">
                            <path fill="#ff9800" d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z"></path>
                            <path fill="#d50000" d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z"></path>
                            <path fill="#ff3d00"
                                d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z">
                            </path>
                        </svg>
                        <svg version="1.1" class="chip" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px"
                            viewBox="0 0 50 50" xml:space="preserve">
                            <image id="image0" width="50" height="50" x="0" y="0"
                                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                          AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB6VBMVEUAAACNcTiVeUKVeUOY
                          fEaafEeUeUSYfEWZfEaykleyklaXe0SWekSZZjOYfEWYe0WXfUWXe0WcgEicfkiXe0SVekSXekSW
                          ekKYe0a9nF67m12ZfUWUeEaXfESVekOdgEmVeUWWekSniU+VeUKVeUOrjFKYfEWliE6WeESZe0GS
                          e0WYfES7ml2Xe0WXeESUeEOWfEWcf0eWfESXe0SXfEWYekSVeUKXfEWxklawkVaZfEWWekOUekOW
                          ekSYfESZe0eXekWYfEWZe0WZe0eVeUSWeETAnmDCoWLJpmbxy4P1zoXwyoLIpWbjvXjivnjgu3bf
                          u3beunWvkFWxkle/nmDivXiWekTnwXvkwHrCoWOuj1SXe0TEo2TDo2PlwHratnKZfEbQrWvPrWua
                          fUfbt3PJp2agg0v0zYX0zYSfgkvKp2frxX7mwHrlv3rsxn/yzIPgvHfduXWXe0XuyIDzzISsjVO1
                          lVm0lFitjVPzzIPqxX7duna0lVncuHTLqGjvyIHeuXXxyYGZfUayk1iyk1e2lln1zYTEomO2llrb
                          tnOafkjFpGSbfkfZtXLhvHfkv3nqxH3mwXujhU3KqWizlFilh06khk2fgkqsjlPHpWXJp2erjVOh
                          g0yWe0SliE+XekShhEvAn2D///+gx8TWAAAARnRSTlMACVCTtsRl7Pv7+vxkBab7pZv5+ZlL/UnU
                          /f3SJCVe+Fx39naA9/75XSMh0/3SSkia+pil/KRj7Pr662JPkrbP7OLQ0JFOijI1MwAAAAFiS0dE
                          orDd34wAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQfnAg0IDx2lsiuJAAACLElEQVRIx2Ng
                          GAXkAUYmZhZWPICFmYkRVQcbOwenmzse4MbFzc6DpIGXj8PD04sA8PbhF+CFaxEU8iWkAQT8hEVg
                          OkTF/InR4eUVICYO1SIhCRMLDAoKDvFDVhUaEhwUFAjjSUlDdMiEhcOEItzdI6OiYxA6YqODIt3d
                          I2DcuDBZsBY5eVTr4xMSYcyk5BRUOXkFsBZFJTQnp6alQxgZmVloUkrKYC0qqmji2WE5EEZuWB6a
                          lKoKdi35YQUQRkFYPpFaCouKIYzi6EDitJSUlsGY5RWVRGjJLyxNy4ZxqtIqqvOxaVELQwZFZdkI
                          JVU1RSiSalAt6rUwUBdWG1CP6pT6gNqwOrgCdQyHNYR5YQFhDXj8MiK1IAeyN6aORiyBjByVTc0F
                          qBoKWpqwRCVSgilOaY2OaUPw29qjOzqLvTAchpos47u6EZyYnngUSRwpuTe6D+6qaFQdOPNLRzOM
                          1dzhRZyW+CZouHk3dWLXglFcFIflQhj9YWjJGlZcaKAVSvjyPrRQ0oQVKDAQHlYFYUwIm4gqExGm
                          BSkutaVQJeomwViTJqPK6OhCy2Q9sQBk8cY0DxjTJw0lAQWK6cOKfgNhpKK7ZMpUeF3jPa28BCET
                          amiEqJKM+X1gxvWXpoUjVIVPnwErw71nmpgiqiQGBjNzbgs3j1nus+fMndc+Cwm0T52/oNR9lsdC
                          S24ra7Tq1cbWjpXV3sHRCb1idXZ0sGdltXNxRateRwHRAACYHutzk/2I5QAAACV0RVh0ZGF0ZTpj
                          cmVhdGUAMjAyMy0wMi0xM1QwODoxNToyOSswMDowMEUnN7UAAAAldEVYdGRhdGU6bW9kaWZ5ADIw
                          MjMtMDItMTNUMDg6MTU6MjkrMDA6MDA0eo8JAAAAKHRFWHRkYXRlOnRpbWVzdGFtcAAyMDIzLTAy
                          LTEzVDA4OjE1OjI5KzAwOjAwY2+u1gAAAABJRU5ErkJggg==">
                            </image>
                        </svg>
                        <svg version="1.1" class="contactless" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px"
                            viewBox="0 0 50 50" xml:space="preserve">
                            <image id="image0" width="50" height="50" x="0" y="0"
                                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                          AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                          cwAACxMAAAsTAQCanBgAAAAHdElNRQfnAg0IEzgIwaKTAAADDklEQVRYw+1XS0iUURQ+f5qPyjQf
                          lGRFEEFK76koKGxRbWyVVLSOgsCgwjZBJJYuKogSIoOonUK4q3U0WVBWFPZYiIE6kuArG3VGzK/F
                          fPeMM/MLt99/NuHdfPd888/57jn3nvsQWWj/VcMlvMMd5KRTogqx9iCdIjUUmcGR9ImUYowyP3xN
                          GQJoRLVaZ2DaZf8kyjEJALhI28ELioyiwC+Rc3QZwRYyO/DH51hQgWm6DMIh10KmD4u9O16K49it
                          VoPOAmcGAWWOepXIRScAoJZ2Frro8oN+EyTT6lWkkg6msZfMSR35QTJmjU0g15tIGSJ08ZZMJkJk
                          HpNZgSkyXosS13TkJpZ62mPIJvOSzC1bp8vRhhCakEk7G9/o4gmZdbpsTcKu0m63FbnBP9Qrc15z
                          bkbemfgNDtEOI8NO5L5O9VYyRYgmJayZ9nPaxZrSjW4+F6Uw9yQqIiIZwhp2huQTf6OIvCZyGM6g
                          DJBZbyXifJXr7FZjGXsdxADxI7HUJFB6iWvsIhFpkoiIiGTJfjJfiCuJg2ZEspq9EHGVpYgzKqwJ
                          qSAOEwuJQ/pxPvE3cYltJCLdxBLiSKKIE5HxJKcTRNeadxfhDiuYw44zVs1dxKwRk/uCxIiQkxKB
                          sSctRVAge9g1E15EHE6yRUaJecRxcWlukdRIbGFOSZCMWQA/iWauIP3slREHXPyliqBcrrD71Amz
                          Z+rD1Mt2Yr8TZc/UR4/YtFnbijnHi3UrN9vKQ9rPaJf867ZiaqDB+czeKYmd3pNa6fuI75MiC0uX
                          XSR5aEMf7s7a6r/PudVXkjFb/SsrCRfROk0Fx6+H1i9kkTGn/E1vEmt1m089fh+RKdQ5O+xNJPUi
                          cUIjO0Dm7HwvErEr0YxeibL1StSh37STafE4I7zcBdRq1DiOkdmlTJVnkQTBTS7X1FYyvfO4piaI
                          nKbDCDaT2anLudYXCRFsQBgAcIF2/Okwgvz5+Z4tsw118dzruvIvjhTB+HOuWy8UvovEH6beitBK
                          xDyxm9MmISKCWrzB7bSlaqGlsf0FC0gMjzTg6GgAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDIt
                          MTNUMDg6MTk6NTYrMDA6MDCjlq7LAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTAyLTEzVDA4OjE5
                          OjU2KzAwOjAw0ssWdwAAACh0RVh0ZGF0ZTp0aW1lc3RhbXAAMjAyMy0wMi0xM1QwODoxOTo1Nisw
                          MDowMIXeN6gAAAAASUVORK5CYII=">
                            </image>
                        </svg>
                        <p class="number">9759 2484 5269 6576</p>
                        <p class="valid_thru">VALID THRU</p>
                        <p class="date_8264">1 2 / 2 4</p>
                        <p class="name">DANIEL PLEBANI</p>
                    </div>
                    <div class="flip-card-back">
                        <div class="strip"></div>
                        <div class="mstrip"></div>
                        <div class="sstrip">
                            <p class="code">***</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="credit-card">
            <div class="card">
                <div class="foreground">
                    <div class="credit-card-header">
                        <div class="category"> <strong>Credit</strong> card</div>
                        <div class="bank">bank-name</div>
                    </div>
                    <div class="credit-card-chip-container">
                        <svg xml:space="preserve" viewBox="0 0 511 511" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns="http://www.w3.org/2000/svg" id="Capa_1" version="1.1" width="800px" height="800px"
                            fill="#d4af37" class="chip">
                            <path d="M455.5,56h-400C24.897,56,0,80.897,0,111.5v288C0,430.103,24.897,455,55.5,455h400c30.603,0,55.5-24.897,55.5-55.5v-288
                      C511,80.897,486.103,56,455.5,56z M464,248H343v-56.5c0-4.687,3.813-8.5,8.5-8.5H464V248z M343,263h121v65H343V263z M479,223h17v65
                      h-17V223z M479,208v-65h17v65H479z M464,168H351.5c-12.958,0-23.5,10.542-23.5,23.5V408H183V103h272.5c4.687,0,8.5,3.813,8.5,8.5
                      V168z M168,248H47v-65h121V248z M32,288H15v-65h17V288z M47,263h121v65H47V263z M263,88V71h137v17H263z M248,88H111V71h137V88z
                       M168,103v65H47v-56.5c0-4.687,3.813-8.5,8.5-8.5H168z M32,208H15v-65h17V208z M15,303h17v65H15V303z M47,343h121v65H55.5
                      c-4.687,0-8.5-3.813-8.5-8.5V343z M248,423v17H111v-17H248z M263,423h137v17H263V423z M343,408v-65h121v56.5
                      c0,4.687-3.813,8.5-8.5,8.5H343z M479,303h17v65h-17V303z M496,111.5V128h-17v-16.5c0-12.958-10.542-23.5-23.5-23.5H415V71h40.5
                      C477.832,71,496,89.168,496,111.5z M55.5,71H96v17H55.5C42.542,88,32,98.542,32,111.5V128H15v-16.5C15,89.168,33.168,71,55.5,71z
                       M15,399.5V383h17v16.5c0,12.958,10.542,23.5,23.5,23.5H96v17H55.5C33.168,440,15,421.832,15,399.5z M455.5,440H415v-17h40.5
                      c12.958,0,23.5-10.542,23.5-23.5V383h17v16.5C496,421.832,477.832,440,455.5,440z"></path>
                        </svg>
                    </div>
                    <div class="info-container">
                        <p class="names">DANIEL PLEBANI</p>
                        <p class="serial">1264 3245 3322 1356</p>
                        <p class="expire">03/24</p>
                    </div>
                </div>
                <svg viewBox="0 0 1600 800" height="100%" width="100%" class="background">
                    <rect height="800" width="1600" fill="#ff9d00"></rect>
                    <g transform="rotate(-30 500 100)" stroke-opacity="0.05" stroke-width="66.7" stroke="#000">
                        <circle r="1800" cy="0" cx="0" fill="#ff9d00"></circle>
                        <circle r="1700" cy="0" cx="0" fill="#fb8d17"></circle>
                        <circle r="1600" cy="0" cx="0" fill="#f47d24"></circle>
                        <circle r="1500" cy="0" cx="0" fill="#ed6e2d"></circle>
                        <circle r="1400" cy="0" cx="0" fill="#e35f34"></circle>
                        <circle r="1300" cy="0" cx="0" fill="#d85239"></circle>
                        <circle r="1200" cy="0" cx="0" fill="#cc453e"></circle>
                        <circle r="1100" cy="0" cx="0" fill="#be3941"></circle>
                        <circle r="1000" cy="0" cx="0" fill="#b02f43"></circle>
                        <circle r="900" cy="0" cx="0" fill="#a02644"></circle>
                        <circle r="800" cy="0" cx="0" fill="#901e44"></circle>
                        <circle r="700" cy="0" cx="0" fill="#801843"></circle>
                        <circle r="600" cy="0" cx="0" fill="#6f1341"></circle>
                        <circle r="500" cy="0" cx="0" fill="#5e0f3d"></circle>
                        <circle r="400" cy="0" cx="0" fill="#4e0c38"></circle>
                        <circle r="300" cy="0" cx="0" fill="#3e0933"></circle>
                        <circle r="200" cy="0" cx="0" fill="#2e062c"></circle>
                        <circle r="100" cy="0" cx="0" fill="#210024"></circle>
                    </g>
                </svg>

            </div>
        </div>
    </div>

@endsection
