@extends('layouts.base')
@section('content')
  @include('layouts.navbar')
  <div class="py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto">
      <h2 class="font-semibold text-4xl text-indigo-900 text-center">We never share or sell your data. Ever.</h2>
      <div class="mt-8 bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6 leading-relaxed">
          <h3 class="text-center font-semibold text-2xl text-gray-500">The Bottom Line</h3>
          <p class="mt-6">You're probably on this page because you're curious about our privacy practices, or you want to exercise your privacy rights, like deleting your account. To make it simple
            for you:
          <ul class="ml-6 mt-4">
            <li class="list-disc">We never share or sell your data</li>
            <li class="list-disc"><a class="text-indigo-400" href="/dashboard/billings">Delete your credit card information</a></li>
            <li class="list-disc"><a class="text-indigo-400" href="/dashboard/account/destroy">Delete your account</a></li>
            <li class="list-disc"><a class="text-indigo-400" href="/dashboard/imports">Delete past spreadsheet uploads</a></li>
            <li class="list-disc">To unsubscribe from emails, click unsubscribe at the top of our emails</li>
          </ul>
          </p>

          <h3 class="mt-8 text-center font-semibold text-2xl text-gray-500">Our commitment to data protection</h3>
          <p class="mt-6">The General Data Protection Regulation (GDPR) is European Union legislation to strengthen and unify data protection laws for all individuals within the European Union. The
            regulation became effective and enforceable on May 25, 2018.</p>

          <p class="mt-6">As a company that values treating our users fairly and transparently, we welcome GDPR's efforts to increase privacy across the board. We are a US business co-founded by an EU
            citizen, and we are fully committed to being compliant with GDPR.</p>

          <p class="mt-6">This page outlines our commitment to complying with GDPR and upholding our users' individual privacy and the privacy of the data they transmit to us. As best practices for
            implementing GDPR evolve, we will make changes to this statement and to our product accordingly.</p>

          <p class="mt-6">GDPR makes a distinction between “data controllers” and “data processors.” Jiokodeu is considered a “data controller” with regards to your account details and behavior on our
            website (such as your email address). We are a “data processor” with regards to the data you upload to our service (such as an API request or a file upload). It is important to understand
            this distinction so you can be better informed of your rights and the rights of the people whose data you transmit.</p>

          <h3 class="mt-8 text-center font-semibold text-2xl text-gray-500">Geocodio GDPR-Compliant Products</h3>

          <p class="mt-6">As a data controller when it comes to your personal account details, our service is GDPR-compliant by default, even for non-EU users. We believe this is in everyone’s best
            interest.</p>

          <p class="mt-6">Note this only applies to your personal account details, such as your email address, physical address, and consent to receive product updates. It does not cover data you
            upload to Geocodio, such as data about your customers. That is covered below under "Geocodio as a data processor."</p>

          <p class="mt-6">If you want to upload data for EU persons, GDPR requires that we have a signed Data Processing Agreement with each other. Users who need a signed Data Processing Agreement
            must be on the Geocodio Unlimited plan at the time of signing (one-month or recurring). All users transmitting data about EU persons are required to have this plan. That is, if you’d like
            to upload a file or use our API with data about EU persons, you must have a Data Processing Agreement with us. <a class="text-indigo-400" href="#">You can sign a Data Processing Agreement
              on the dashboard</a>. <a class="text-indigo-400" href="/billings">You can cancel the plan at any time on the dashboard.</a></p>

          <h3 class="mt-8 text-center font-semibold text-2xl text-gray-500">Geocodio as a data controller: Your account details</h3>

          <p class="mt-6">
            <span class="font-bold">Your website activity</span>
            We use several third-party vendors to help us improve our customer experience. We have signed Data Processing Agreements with all of our vendors. These vendors are: Intercom (the little
            chat bubble you see on the bottom right and product email), Google Analytics (anonymized visit and traffic tracking), Ahrefs (anonymized traffic tracking), MailChimp (marketing email),
            Satismeter (customer happiness surveys), Stripe (payments), and QuickBooks (invoicing).

            We have authorized these vendors collect several different kinds of data about our users, including:
          <ul class="ml-6 mt-4">
            <li class="list-disc">Name</li>
            <li class="list-disc">Email address, if provided (Intercom, Satismeter)</li>
            <li class="list-disc">Date of signup</li>
            <li class="list-disc">Location based on IP address (Google Analytics, Intercom)</li>
            <li class="list-disc">Website visits and behavior (pages visited, time on page, so forth) (Intercom, Google Analytics, Ahrefs)</li>
            <li class="list-disc">Customer support conversation history (Intercom)</li>
            <li class="list-disc">Feedback comments and ratings (Satismeter)</li>
            <li class="list-disc">Payment information and history (QuickBooks, Stripe)</li>
          </ul>
          </p>

          <p class="mt-6">
            Frequency at which this data is deleted:

          <ul class="ml-6 mt-4">
            <li class="list-disc">Google Analytics: All collected user data is automatically deleted after 14 months (the minimum duration) and data is anonymized</li>
            <li class="list-disc">Intercom: For signed up users, after account closure; for visitors, the data collected (IP, location, and conversation history) is automatically deleted after 9
              months without a visit
            </li>
            <li class="list-disc">Satismeter: After account closure</li>
            <li class="list-disc">QuickBooks, Stripe: Credit card data is deleted after account closure. Invoice and payment history is never deleted due to tax and accounting purposes. After account
              deletion, Stripe payment history is tied to a customer number only that is stripped of any identifying details.
            </li>
          </ul>
          </p>

          <p class="mt-6">We use cookies on our website to signal your logged-in status and track behavior on our website.</p>
          <p class="mt-6">We do not engage in psychographic profiling or sell your information to advertisers.</p>
          <p class="mt-6">We may use your usage history to send you relevant messages, for example if you’ve used our Congressional district append in the past and we make improvements to that
            append.</p>
          <p class="mt-6"><a class="text-indigo-400" href="/dashboard/account/destroy">You can delete your account at any time via the dashboard</a>. You can
            <a href="/imports" class="text-indigo-400">delete any
              spreadsheet upload at any time via the dashboard</a>.</p>
          <p class="mt-6">When you sign up, we ask for your email address, your country, whether you are an EU citizen, whether you are transmitting any data about EU persons, whether you are over the
            age of 16, and whether all person data is for persons over the age of 16. We store this data to ensure GDPR compliance.</p>
          <p class="mt-6">When you register, we store your IP address. This is so we can prevent abuse from people attempting to register multiple accounts.</p>
          <p class="mt-6">Our user database is encrypted and regularly backed up to Amazon S3 in the US. Our website is hosted on Amazon S3 and CloudFront.</p>
          <p class="mt-6">We have no known breaches in our past.</p>

          <h3 class="mt-8 text-center font-semibold text-2xl text-gray-500">Geocodio GDPR-Compliant Products</h3>
          <p class="mt-6">If you sign up for a paid plan with a credit card, your information is stored with <a class="text-indigo-400" href="https://www.mollie.com">Mollie</a>, our payments
            processing vendor. This is our default option, and you will be
            invoiced and billed directly through Stripe. Your financial information is never stored on our servers. If you have paper billing, invoices are stored with Quickbooks. If you pay an
            invoice through Quickbooks, it will route the payment through our Stripe account (unless you have paid via paper check or ACH). We have signed Data Processing Agreements with both
            vendors.</p>

          <p class="mt-6">
            What we can see in Mollie and Quickbooks:

          <ul class="ml-6 mt-4">
            <li class="list-disc">Your name</li>
            <li class="list-disc">Email address</li>
            <li class="list-disc">Billing address</li>
            <li class="list-disc">Credit card type</li>
            <li class="list-disc">Last 4 digits of your credit card, for card differentiation purposes</li>
          </ul>
          <span class="mt-2 font-bold text-lg">We cannot see your full credit card number.</span>
          </p>

          <p class="mt-6">For accounting and tax purposes, we keep records of customer payments.</p>

          <p class="mt-6">If you would like to remove your credit card information, <a class="text-indigo-400" href="/billings">you can do so on the dashboard at any time</a>. Note that you will be
            charged for any outstanding balance before your
            credit card is deleted. </p>

          <h3 class="mt-8 text-center font-semibold text-2xl text-gray-500">Geocodio as a data processor</h3>
          <p class="mt-6">We take data protection seriously and safeguard the data you transmit to us.</p>
          <p class="mt-6">Our API and spreadsheet upload tool are hosted on leased servers from **hosting link** and are physically located in the EU. API requests on plans other than the Unlimited
            plan are
            logged, and we occasionally analyze the logs as part of ongoing improvements. Geocodio Unlimited usage is not logged. You can opt-out of this by emailing us.</p>

          <p class="mt-6">For the privacy of those whose data you are transmitting, we encourage you to only transmit location data through our services.</p>

          <p class="mt-6">
            Under no circumstances can sensitive data for EU persons be transmitted to Geocodio. This includes the following categories under Articles 9 and 10 of GDPR:

          <ul class="ml-6 mt-4">
            <li class="list-disc">racial or ethnic origin</li>
            <li class="list-disc">political opinions</li>
            <li class="list-disc">religious or philosophical beliefs</li>
            <li class="list-disc">trade union membership</li>
            <li class="list-disc">genetic data</li>
            <li class="list-disc">biometric data for the purpose of uniquely identifying a natural person,</li>
            <li class="list-disc">data concerning health or</li>
            <li class="list-disc">data concerning a natural person’s sex life</li>
            <li class="list-disc">sexual orientation</li>
            <li class="list-disc">criminal convictions and offenses or related security measures</li>
          </ul>
          You can delete your account data at any time by emailing us.
          </p>

          <h3 class="mt-8 text-center font-semibold text-2xl text-gray-500">Contact</h3>
          <p class="mt-6">If you have any questions, please email us at **contact email link**.</p>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.footer')
@endsection