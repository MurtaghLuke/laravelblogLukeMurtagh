@extends('layouts.app')

@section('content')
    {{-- centre the class and give some padding --}}
    <div class="container mx-auto px-4 py-10">
    <h1 class="text-4xl font-bold text-center text-green-600">Frequently Asked Questions</h1>

        {{-- //spacing --}}
        <div class="mt-8 space-y-8">
            <!--   Question 1 -->
            <div class="faq-item">
                <h3 class="text-2xl font-semibold text-gray-800">Do I need a visa to visit Ireland?</h3>
                <p class="text-gray-600">It depends on your nationality. Citizens of the EU, EEA, and Switzerland do not need a visa to enter Ireland. Other nationals may need to apply for a tourist visa before traveling.</p>
            </div>

            <!--  Q2 -->
            <div class="faq-item mt-6">
                {{-- //bold font for questions --}}
                <h3 class="text-2xl font-semibold text-gray-800">What is the best time to visit Ireland?</h3>
                <p class="text-gray-600">The best time to visit Ireland is during the late spring (May to June) and early autumn (September to October). The weather is mild, and there are fewer tourists during these months.</p>
            </div>

            <!--3               mt-6 adds margin-->
            <div class="faq-item mt-6">
                <h3 class="text-2xl font-semibold text-gray-800">What are the must-see attractions in Ireland?</h3>
                <p class="text-gray-600">Some must-see attractions include the Cliffs of Moher, the Ring of Kerry, Dublin's Temple Bar, the Giant's Causeway, and Blarney Castle. Each region of Ireland offers unique experiences!</p>
            </div>

            <!--  4 -->
            <div class="faq-item mt-6">
                <h3 class="text-2xl font-semibold text-gray-800">Is it safe to travel around Ireland?</h3>
                <p class="text-gray-600">Yes, Ireland is one of the safest countries to visit in Europe. However, as with any destination, it's always a good idea to take basic precautions, such as keeping an eye on your belongings and avoiding poorly lit areas at night.</p>
            </div>

            <!--  5 -->
            <div class="faq-item mt-6">
                <h3 class="text-2xl font-semibold text-gray-800">What currency is used in Ireland?</h3>
                <p class="text-gray-600">Ireland uses the Euro (€) as its official currency. It's recommended to carry some cash, although most places accept credit cards.</p>
            </div>

            <!--  6 -->
            <div class="faq-item mt-6">
                <h3 class="text-2xl font-semibold text-gray-800">Can I use my mobile phone in Ireland?</h3>
                <p class="text-gray-600">Yes, most mobile networks in Ireland support international roaming. You can also buy a local SIM card if you prefer a more affordable option for using your phone while traveling.</p>
            </div>

            <!--  7 -->
            <div class="faq-item mt-6">
                <h3 class="text-2xl font-semibold text-gray-800">What type of transportation is available in Ireland?</h3>
                <p class="text-gray-600">Ireland has a well-developed public transport system, including buses, trains, and taxis. You can also rent a car if you want to explore more remote areas of the country.</p>
            </div>

            <!--  8 -->
            <div class="faq-item mt-6">
                <h3 class="text-2xl font-semibold text-gray-800">Are there any specific customs or etiquette I should be aware of?</h3>
                <p class="text-gray-600">Irish people are friendly and welcoming. It's customary to greet people with a handshake, and be sure to say "please" and "thank you." Tipping is appreciated but not mandatory (usually 10-15% in restaurants).</p>
            </div>
        </div>
    </div>
@endsection
