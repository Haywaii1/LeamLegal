<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($name)
    {
        // Define the team members' details
        $teamMembers = [
            'luqman' => ['name' => 'Luqman Eyinade', 'role' => 'Lead Partner', 'image' => 'img/bimbo.jpg', 'bio' => 'Luqman Abimbola Eyinade is a distinguished legal practitioner and the Lead Partner at Leam Legal Practice. With extensive expertise in corporate and commercial law, mergers and acquisitions, private placements, banking and finance, dispute resolution, and regulatory compliance, he provides strategic legal counsel to individuals, businesses, and organizations, ensuring they navigate complex legal landscapes with confidence
                           <br><br> His experience in mergers and acquisitions (M&A) and private placements includes advising companies on corporate restructuring, shareholder agreements, asset transfers, due diligence, and regulatory approvals. He has successfully guided financial institutions and corporations through equity and debt financing, private equity deals and investment structuring, helping businesses secure capital while mitigating legal and financial risks
                            <br><br> Luqman also specialises in banking and finance law, where he provides advisory services on regulatory compliance, corporate financing structures, syndicated loans, and financial transactions. His expertise extends to Islamic banking and finance law, ensuring compliance with Shari’ah principles in financial structuring, investment transactions, and alternative financing models. His ongoing LL.M. at Lagos State University focuses on Islamic law of banking and finance and international commercial arbitration, strengthening his knowledge in these evolving practice areas.
                            <br><br> A seasoned advocate in commercial arbitration and alternative dispute resolution (ADR), Luqman represents clients in complex commercial disputes, shareholder conflicts, trade disputes, and tortious claims, including economic torts and negligence. He appears before Nigerian courts, arbitration tribunals, and regulatory bodies, ensuring swift and cost-effective resolutions.
                           <br><br> Luqman has also built a strong reputation in sports and entertainment law, presently acting as legal counsel to several Nigerian football clubs, advising on player transfers, contract negotiations, regulatory compliance, and dispute resolution before football associations and arbitration tribunals. He has facilitated both local and international player transfers and represents clubs before various sporting regulatory bodies.
                            <br><br> As a company secretary and corporate governance expert, he advises financial institutions, fintech startups, edutech, health-tech, and emerging tech companies on regulatory compliance, corporate governance, and business structuring. He has played a pivotal role in board meetings, corporate decision-making, and secretariat services, ensuring compliance with corporate governance best practices. He has played a pivotal role in the formation and legal advisory of several startups, ensuring legal protection and compliance with industry regulations.
                            <br><br> He obtained his Bachelor of Laws (LL.B.) from Obafemi Awolowo University and his Barrister at Law (BL) from the Nigerian Law School. Currently, he is furthering his legal expertise by pursuing an LL.M. at Lagos State University.
                            <br><br> Email: luqman@leamlegal.com'],


            'morisola' => ['name' => 'Morisola Akinlabi', 'role' => 'Partner', 'image' => 'img/moji.jpg', 'bio' => 'Morisola Alaba Akinlabi is a dedicated legal practitioner with extensive experience in legal research, litigation at both national and regional levels, legislative advocacy, and capacity-building initiatives. Her expertise spans human rights law, with a particular focus on freedom of expression, access to information, media freedom, and digital rights.
                               <br><br> She previously served as a Legal Officer at Media Rights Agenda (MRA), where she worked extensively on strategic litigation, policy advocacy, and legal capacity-building to promote and protect fundamental rights. She remains an active member of MRA’s Network of Lawyers, providing pro bono legal representation in cases involving access to information and freedom of expression across Nigeria.
                               <br><br> Beyond litigation, Morisola is deeply engaged in digital rights advocacy and internet governance. She is a Digital Grassroots Ambassador (DIGRA) and served as a trainer in the Digital Grassroots Ambassadors Program (Cohort 4). She is also an alumna of the African School on Internet Governance (AfriSIG) and the immediate past Coordinator of the Nigeria Youth Internet Governance Forum (NYIGF). In her role as a Program Coordinator at Digital Grassroots, she played a key role in mentoring young leaders and fostering community engagement on internet governance and digital rights, particularly for underrepresented youth.
                               <br><br> Morisola obtained her Bachelor of Laws (LL.B.) from Obafemi Awolowo University, Ile-Ife, Nigeria, and has undertaken specialised training in freedom of expression, access to information, internet governance, and digital rights. She brings a wealth of knowledge and a strong commitment to using the law as a tool for advancing human rights, ensuring access to justice, and shaping legal frameworks that protect fundamental freedoms in both online and offline spaces.
                                <br><br> Email: morisola@leamlegal.com '],


            'waliu' => ['name' => 'Waliu Bello', 'role' => 'Partner', 'image' => 'img/waliu.jpg', 'bio' => 'Waliu Abiodun Bello is a skilled legal professional at Leam Legal Practice, offering tailored legal solutions across corporate and commercial law, dispute resolution, regulatory compliance, and real estate transactions. He provides sound legal advice and representation, helping clients navigate complex legal and business challenges with efficiency and precision.
                            <br><br> He has extensive experience in corporate structuring, mergers and acquisitions, governance, and regulatory compliance, ensuring businesses remain legally sound and operationally efficient. His expertise in litigation, arbitration, and alternative dispute resolution allows him to handle disputes effectively, protecting client interests in both commercial and private matters.
                            <br><br> In real estate law, Waliu advises on property transactions, lease agreements, land documentation, and title verification, ensuring seamless transactions and regulatory compliance. His thorough approach and strong legal acumen enable him to identify and mitigate risks in real estate dealings.
                            <br><br> With a keen eye for detail and a results-driven mindset, Waliu is dedicated to providing strategic, practical, and innovative legal solutions that align with each client’s unique needs.
                            <br><br> Email: waliu@leamlegal.com'],


            'ridwan' => ['name' => 'Ridwan Sharomi', 'role' => 'Associate', 'image' => 'img/ridwan.jpg', 'bio' => 'Ridwan Sharomi is a Nigerian lawyer, legaltech enthusiast, and immigration consultant with a strong background in legal automation, practice management, and cross-border immigration services. He obtained his law degree from Obafemi Awolowo University in 2020 and was called to the Nigerian Bar in 2024 after completing his training at the Nigerian Law School, Lagos Campus.
                            <br><br> With extensive experience in legal automation, Ridwan specialises in optimizing legal workflows to enhance efficiency and profitability. As a no-code workflow builder at Lawcus, a California-based practice management software company, he has worked with industry-leading platforms such as Clio, Practice Panther, Lawmatics, and Litify. His expertise helps streamline operations, improve client engagement, and maximise firm productivity.
                            <br><br> In addition to his work in legal technology, Ridwan serves as an immigration consultant for prominent U.S. law firms, including Lisinski Law Firm, MRA Law Firm, and Chidolue Law Firm. He provides advisory services on U.S. immigration matters, specializing in employment-based visas (EB1-A, EB2-NIW, O-1A) and family or marriage-based green card applications.
                            <br><br> He is currently pursuing an LLM at Lagos State University, further solidifying his expertise in the legal profession.
                            <br><br> Email: ridwan@leamlegal.com'],


            'aliyu' => ['name' => 'Aliyu Akinwunmi Akano', 'role' => 'Associate', 'image' => 'img/aliyu.jpg', 'bio' => 'Aliyu Akinwunmi Akano is an Associate in the Corporate, Real Estate, and Dispute Resolution Practice at Leam Legal Practice. He is a dedicated legal professional known for his strategic approach to corporate structuring, real estate transactions, and regulatory compliance. Aliyu specialises in resolving complex disputes through litigation, arbitration, and mediation while providing clients with sound legal advisory services across various sectors.
                            <br><br> Email: Aliyu@leamlegal.com']
        ];

        // Check if the profile exists
        if (!isset($teamMembers[$name])) {
            abort(404); // Show 404 page if profile not found
        }

        // Pass the profile data to the view
        return view('profile', ['member' => $teamMembers[$name]]);
    }
}

