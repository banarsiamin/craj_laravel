-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2025 at 01:45 PM
-- Server version: 10.11.10-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u826090285_craj_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_image`, `phone`, `bio`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin User', 'admin@example.com', NULL, '$2y$12$RSN7YuiYMew8pdp/XQ.GyeOtxUnIB/cB13psJjq6yE8gbNPtg.T02', NULL, NULL, NULL, 'baBKgluuoyLu9VvtP0ZWOWYA49t3RcOBKGM049gPEjUNaZNlOISYojFCvShT', '2025-04-04 23:57:31', '2025-04-04 23:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_reset_tokens`
--

CREATE TABLE `admin_password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `abstract` text NOT NULL,
  `content` longtext DEFAULT NULL,
  `references` longtext DEFAULT NULL,
  `author_contributor_list` longtext DEFAULT NULL,
  `author_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `affiliation` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `pages` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `issue` varchar(255) DEFAULT NULL,
  `doi` varchar(255) DEFAULT NULL,
  `pdf_file` varchar(255) DEFAULT NULL,
  `html_file` varchar(255) DEFAULT NULL,
  `docx_file` varchar(255) DEFAULT NULL,
  `html_content` longtext DEFAULT NULL,
  `page_no` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `likes` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `manuscript_path` varchar(255) NOT NULL,
  `cover_letter_path` varchar(255) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL DEFAULT 'draft',
  `published_date` date DEFAULT NULL,
  `has_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `license_url` varchar(255) DEFAULT NULL,
  `copyright_holder` varchar(255) DEFAULT NULL,
  `copyright_year` int(11) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `abstract`, `content`, `references`, `author_contributor_list`, `author_name`, `email`, `affiliation`, `country`, `keywords`, `pages`, `category`, `volume`, `issue`, `doi`, `pdf_file`, `html_file`, `docx_file`, `html_content`, `page_no`, `views`, `likes`, `manuscript_path`, `cover_letter_path`, `is_published`, `status`, `published_date`, `has_permissions`, `license_url`, `copyright_holder`, `copyright_year`, `featured_image`, `created_at`, `updated_at`) VALUES
(1, 'Subaltern Climate Change Adaptation: A Theoretical Framework on Strategic Resilience in Subnational Border-communities', '<p>Framed along pluralist and critical social theories, the paper offers an innovative climate adaptation theoretical construct&mdash;subaltern adaptation&mdash;which necessitates the reimagining of the &lsquo;community&rsquo; as a <em>spatio-temporal</em> (&lsquo;historical&rsquo; space) and <em>spatio-social</em> (&lsquo;anthropological&rsquo; space) within a particular ecological zone, instead of the usual state-centric scale (e.g., the <em>barangay</em>, or the smallest&nbsp;administrative government district in the Philippines, as community), as a new and ideal site for climate change adaptation analysis and methodology. With the <em>border-community</em> as point of departure, it takes the subnational border-community as locus, and the local institution as unit of analysis. The proposed theoretical framework is grounded on the assumption that adaptation is a function and fusion of institutional strategy, inter-institutional partnership, and linked ecological and demographic realities. It fashions the complex and fundamental relationship between climate change, environment, and society&mdash;as lens to reveal the socio-ecological realities and vulnerability issues shared by local institutions in the border-community&mdash;and offers a methodical strategy that can guide interinstitutional, transborder or cross-scalar adaptation towards the creation of a resilient subaltern climate change community. The local transborder collaboration is basically geared at addressing the geospatial and social vulnerabilities that the local institutions share across the border and ultimately addresses the constraints that state-defined borders have on local climate adaptation.</p>', NULL, '<ol>\r\n<li>Belcher, O. 2008. Everywhere and nowhere: the exception and the topological challenge in geography,&nbsp;<em>Antipode</em>, 40, 499&ndash;503</li>\r\n<li>Bookchin, M. 2005. The Ecology of Freedom: The Emergence and Dissolution of Hierarchy. Oakland: AK Press.</li>\r\n<li>Chomsky, N. 1997. Media Control: The Spectacular Achievements of Propaganda. New York: Seven Stories Press.</li>\r\n<li>Christoplos, I., Anderson, S., Arnold, M., Galaz, V., Hedger, M., Klein, R. and Le Goulven, 2009. The Human Dimension of Climate Adaptation: The Importance of Local and Institutional Issues. Stockholm: Ministry of Foreign Affairs, Commission on Climate Change and Development.</li>\r\n<li>Connolly, W. 2007. The complexities of sovereignty. In Giorgio Agamben: sovereignty and life. Matthew Calarco and Steven DeCaroli, eds.&nbsp;Stanford, CA, Stanford University Press.</li>\r\n<li>Dussel, E. 2011. Politics of Liberation: A Critical World History. Translated by Thia Cooper. London: SCM Press.</li>\r\n<li>Foster, JB., et al. 2010. The Ecological Rift: Capitalism&rsquo;s War on the Earth. New York: Monthly Review Press.</li>\r\n<li>Fraser, N. 2007. Transnationalizing the public sphere: on the legitimacy and efficacy of public opinion in a post-westphalian world. In Identities, affiliations, and allegiances. Seyla Benhabib et al. eds.&nbsp;New York, Cambridge University Press.</li>\r\n<li>Freire, P. 2009. Pedagogy of the Oppressed. New York: Continuum.</li>\r\n<li>Ge, M., K. Lebling, K. Levin, and J. Friedrich. 2019. &ldquo;Tracking Progress of the 2020 Climate Turning Point.&rdquo; Working Paper. Washington, DC: World Resources Institute. <a href=\"https://wri.org/2020-turning-pointprogress\">https://wri.org/2020-turning-pointprogress</a></li>\r\n<li>Goemans, H. 2006. Bounded communities: territoriality, territorial attachment, and conflict. In Territoriality in conflict in an era of globalization. Miles Kahler &amp; Barbara F. Walter, eds. Cambridge, Cambridge University Press.</li>\r\n<li>2022 Climate Change 2022:&nbsp;Impacts, Adaptation and Vulnerability. Working Group II contribution to the 6<sup>th</sup> Assessment Report of the Intergovernmental Panel on Climate Change. Cambridge University Press.</li>\r\n<li>Marx, K. 2007.&nbsp;Economic and Philosophic Manuscripts of 1844. Translated by Martin Milligan. Dover Books on Western Philosophy. New York, NY: Dover Publications.</li>\r\n<li>Pelling, M. 2011. Adaptation to Climate Change: From Resilience to Transformation. London and New York: Routledge.</li>\r\n<li>Rabinow, P., ed. 1984. The Foucault Reader. New York: Pantheon.</li>\r\n<li>Sale, K. 2000. Dwellers in the Land: The Bioregional Vision. Athens: University of Georgia Press.</li>\r\n<li>Scott, J. 1998. Seeing Like a State: How Certain Schemes to Improve Human Condition Have Failed. New Haven: Yale University Press.</li>\r\n<li>Sen, A. 1981. Poverty and Famines: An Essay on Entitlement and Deprivation. Oxford: Clarendon Press.</li>\r\n<li>Taylor, M. 2015. The Political Ecology of Climate Change Adaptation. London and New York: Routledge.</li>\r\n<li>2024. Adaptation Gap 2024. <a href=\"https://www.unep.org/resources/adaptation-gap-report-2024\">https://www.unep.org/resources/adaptation-gap-report-2024</a></li>\r\n<li>United Nations. 2020. Flagship UN study shows accelerating climate change on land, sea and in the atmosphere. <a href=\"https://news.un.org/en/story/2020/03/1059061\">https://news.un.org/en/story/2020/03/1059061</a></li>\r\n<li>2024. Climate Reports. <u>https://www.un.org/en/climatechange/reports</u></li>\r\n<li>Williams, M. 2007. Nonterritorial boundaries of citizenship. In Identities, affiliations, and allegiances. Seyla Benhabib et al., eds.&nbsp;New York, Cambridge University Press.</li>\r\n<li>Wisner, B., et al. 2004. At Risk: Natural Hazards, People&rsquo;s Vulnerability and Disasters 2nd ed. New York: Routledge.</li>\r\n</ol>', '<p><strong>&nbsp;Dascil, Rommel Meneses</strong></p>\r\n<p>Department of Sociology, Mariano Marcos State University, Philippines</p>\r\n<p>Divine Word College of Laoag Graduate School, Philippines</p>', 'Dr. Rajesh Kumar', 'rajesh.kumar@example.com', 'Indian Institute of Technology', 'India', 'Subaltern climate change adaptation, Subnational border-community, Inter-local adaptation governance, Inter-institutional transborder synergy, Strategic resiliency.', '355-362', 'Physical, Chemical Sciences, Engineering Technology', NULL, NULL, 'https://doi.org/10.55677/ijssers/V05I04Y2025-01', 'articles/pdf/NxEy0ivfS0AKVNJd3ryCnwuXgBEy81eU4Y6YhcKN.pdf', NULL, NULL, '<h3><strong>Subaltern Climate Change Adaptation: </strong><strong>A Theoretical Framework on Strategic Resilience in Subnational <em>Border-communities</em> </strong></h3>\r\n<p><strong>&nbsp;</strong> <strong>&nbsp;Dascil, Rommel Meneses</strong> Department of Sociology, Mariano Marcos State University, Philippines Divine Word College of Laoag Graduate School, Philippines &nbsp; <strong>ABSTRACT:</strong> Framed along pluralist and critical social theories, the paper offers an innovative climate adaptation theoretical construct&mdash;subaltern adaptation&mdash;which necessitates the reimagining of the &lsquo;community&rsquo; as a <em>spatio-temporal</em> (&lsquo;historical&rsquo; space) and <em>spatio-social</em> (&lsquo;anthropological&rsquo; space) within a particular ecological zone, instead of the usual state-centric scale (e.g., the <em>barangay</em>, or the smallest&nbsp;administrative government district in the Philippines, as community), as a new and ideal site for climate change adaptation analysis and methodology. With the <em>border-community</em> as point of departure, it takes the subnational border-community as locus, and the local institution as unit of analysis. The proposed theoretical framework is grounded on the assumption that adaptation is a function and fusion of institutional strategy, inter-institutional partnership, and linked ecological and demographic realities. It fashions the complex and fundamental relationship between climate change, environment, and society&mdash;as lens to reveal the socio-ecological realities and vulnerability issues shared by local institutions in the border-community&mdash;and offers a methodical strategy that can guide interinstitutional, transborder or cross-scalar adaptation towards the creation of a resilient subaltern climate change community. The local transborder collaboration is basically geared at addressing the geospatial and social vulnerabilities that the local institutions share across the border and ultimately addresses the constraints that state-defined borders have on local climate adaptation. &nbsp; <strong>KEYWORDS: </strong>Subaltern climate change adaptation, Subnational border-community, Inter-local adaptation governance, Inter-institutional transborder synergy, Strategic resiliency. <strong>&nbsp;</strong> <strong>INTRODUCTION </strong> The only thing that can save us is a revolution in the constitution of human society itself (Foster et al., 2010: 38). &nbsp; <strong>THE CLIMATE CHANGE SCENARIO</strong> In March 2020, the United Nations (UN) released a wide-ranging climate decadal forecast that graphically and comprehensively reveals scientific evidence of physical signs of climate change and its dire effects on socio-economic development, human health and mobility, food security and natural ecosystems (UN News, 2020). Four years later, in preparation for COP29, the UN (2024) once again issued Red Alerts, through its Climate Reports, that the years 2015-2024 had been the warmest on record. Early on, another international report, Tracking Progress of the 2020 Climate Turning Point, was released by the World Resources Institute.&nbsp; The report shows how far the world has done in fulfilling the climate change Mission 2020 campaign, which aims to bend the curve in global greenhouse gas emissions consistent with the Paris Agreement of 2015 (Ge et al., 2019).&nbsp; The latter document generally reveals that progress is uneven across the various set milestones, that data to assess progress are either outdated or insufficient, and that governments need to fulfill their commitment to get the world on track to deliver net zero emission by 2050.&nbsp; This in a way explains the UN&rsquo;s decadal forecast that indicates that a new annual global temperature record is likely in the coming years and simply a matter of time (UN News, 2020). Indubitably, climate change is now the number one global issue and considered as one of humanity&rsquo;s greatest threats and most urgent challenges (IPCC, 2022). Once considered a myth believed to be propagated only by doomsayers, climate change has gradually been accepted in mainstream scientific research and international development agenda. As it has aroused fear for and pessimism on humanity&rsquo;s future, it has also inspired and necessitated multilateral collaborative arrangements among global political and economic institutions, e.g., the United Nations Framework Convention on Climate Change Conference of Parties (UNFCCC-COP), Climate Vulnerable Forum (V20) or the organization of countries deemed most vulnerable to climate change, among many other international and local climate change-related organizations. At the recent COP29, the UN Environment Programme (2024) reported on the growing global climate adaptation gaps and called for strong collective, quantified, and nationally determined efforts on climate finance. This resonates with UNEP&rsquo;s immediate goal, which is to bring countries to agree and commit to substantial reduction in carbon emission, which is scientifically proven as the primary contributor to the planet&rsquo;s rising temperature. The long-term perspective, however, is focused towards a more sustainable world economy that can turn around the impact of the changing climate and enhanced humanity&rsquo;s resiliency through multilevel initiatives. <strong>Climate Change Adaptation Divide</strong> While adaptation strategies take center stage in climate change debates, these are mostly subsumed within comprehensive and broad policies created from the perspective of international and national decision-making bodies.&nbsp; Such perspective has resulted in large-scale models prescribed for national governments and implemented from the top.&nbsp; While there are sporadic attempts to consider community-level adaptation options, which are recently made visible in national policies, these are strictly bounded by and within state-centric platforms like the local government units (province, municipality, and barangay).&nbsp; Although this fulfills the recently developed idea that &ldquo;approaches to adaptation must be turned upside down to focus on local adaptation strategies as the point of departure for engagement&rdquo; (Christoplos et al., 2009: 31), it creates a glaring gap because vulnerability to climate change impact naturally transgresses state-centric boundaries. While adaptation is addressed at the community-level, the idea of &lsquo;<em>community</em>&rsquo; is politically framed within the bounds of the <em>barangay</em>, which is assumed as basis and unit for measuring the vulnerability of the community.&nbsp; This approach is plausible and laudable considering the weight of the challenges of climate change, however, it fails to consider the fact that the causes and features of vulnerability, e.g., ecological and social, could extend beyond centralized local jurisdictional boundaries, in such a way that two or three barangays bordering each would share similar vulnerability that requires integrated or unified adaptation strategies. This issue is made more problematic in the case of border-barangays belonging to two or three different municipalities that differ in administrative and financial capacities to implement adaptation programs. Considering the above, the <em>border-community</em> scale needs to be explored in climate change and local adaptation strategies.&nbsp; Primarily due to the constraints of state-centric scales in research and development frameworks, subnational border-communities remain invisible to the curious and evolving lens of climate change research, dimmed in development studies, and overlooked in community development policies. Since policies are framed in the context of the local government unit and therefore confined in definite political boundaries, community-level adaptation, including those that involve local institutions, are confined in the <em>barangay. </em>This leaves the realities of the border-community, as a homogenous entity, unexplored. &nbsp; <strong>THEORETICAL FRAMEWORK </strong> <strong>The Border-Community as Locus for Rethinking Resiliency</strong> As a new way of looking at climate change and local adaptation, this paper takes on the subaltern logic in development discourse and rests on a radical consideration of local or subnational border-communities and the necesssity of horizontal adaptation/development integration across local borders through local institutions; hence, it brings the climate change adaptation strategy debate to a new locus, scope, and context. The <em>border-community</em>, the locus of the framework, has two distinct characteristics. First, it is a cluster of (two or more) <em>barangays</em> that are jurisdictionally parts of different municipalities but share the same jurisdictional border, (although this may also mean other intra-state geographical areas that share the borders of larger political jurisdictions (provinces and regions). Second, it is situated in a homogenous ecological and topographical zone, i.e., upland, lowland, or coastal. &nbsp;Different ecological zones face different climate risks, and, therefore, need different adaptation strategies. Although unexplored and therefore unusual in climate change literature and practice, this choice of locus assumes that the dimensions of vulnerability and adaptation operate at multiple but interconnected spatial and temporal frames, and that the indicators of the same dimensions should be measured and integrated in ways that are sensitive to underlying geographic, ecological, and socio-political realities. Simply put, this paper argues that community-level vulnerability and the required adaptation strategy vary according to shared hazards resulting from climate variability; common geo-spatial realities; and, perennial socio-demographic features, resulting from social, economic and political structures, and institutional structures and arrangements that shape said features. Thus, this paper offers a framework based on the common social-ecological realities of border-communities and that which necessitates an adaptation strategy beyond the geographic boundaries of state-defined administrative structures. Since local institutions inevitably shape climate governance discourse and direct the practice of adaptation at the local level, the paper proposes looking into formal and informal local institutions as the unit of measurement to review current climate adaptation practices and determine the feasibility of an inter-institutional and trans-border synergy for community-managed adaptation governance. <strong>The Local Border in a Changing Climate: Engaging Critical Social Theories</strong> Challenged by the limiting essentialism of state-centric, top-down, and centralist development paradigm, and the relatively unexplored potential of the border-community as an alternative locus of and scale for, and local institutions as key to, subnational, community-level climate change adaptation, this study is generally framed along critical social theories and revolutionary paradigms.&nbsp; It adopts theoretical pluralism and engages theories that propound <em>development as political </em>and<em> historical, liberation of the periphery, </em>and<em> participatory development. </em>As to how climate change should be appropriately structured, the study adopted revolutionary paradigms such as <em>structural vulnerability paradigm, social ecology,</em> <em>borderland framework </em>and<em> transformative adaptation.</em> These critical points of view have found various strains among adaptation schools of thought that prefer to see the realities of vulnerability because of historical socio-structural formation and exacerbated by changing environmental conditions. Vulnerability to climate change hazards, being anthropogenic, as these schools argue, is produced by the powerful predisposition of social structures formed throughout many climate change regimes that see adaptation as a technical rather than a social issue. &nbsp;Consequently, these thinkers propound climate change adaptation is best tackled, not by state and corporate entities, but by those who are vulnerable&mdash;the poor and the periphery. To portray a holistic picture of this paper&rsquo;s takes on critical and radical theories in juxtaposition with the mainstream theories that they challenge.&nbsp; Through this, it clearly posits the need to consider a subaltern scale, like the border-community and local institutions, to fulfill the requisites of community-level strategic resilience. <strong>Problematizing Local Borders</strong>.&nbsp; Practically, state-centric political or jurisdictional borders exist for the purpose of restriction, but with climate events and their associated risks increasingly transgressing border spaces, the current border framework becomes increasingly problematic. While available literature dwells on inter-state/international borders, this paper seeks to identify how local, subnational, or intra-state border policies interplay with risks and adaptation policies and practices. Moreover, it proposes reframing current border concepts to advance, rather than restrict, local climate adaptation by improving connections between communities and local governments and enhancing inter-institutional ability to respond to climate change.&nbsp; It assumes that a strategic policy framework is necessary to persuade border-communities to cooperatively manage resources, risk, and opportunities in a way that allows transborder synergy for enhanced climate adaptation strategies. Local borders, as implied above, are seen here as inherently problematic in the face of climate change. Hence, this paper pursues the conceptual call (although now mostly directed on inter-state boundaries) to look at borders not as fixed or that must be overcome, but as an evolving construction that must be constantly reviewed and considered as habitat rather than national spaces and to see political responsibility for the pursuit of resilience (Connoly, 2007; Belcher et al., 2008; Goemans, 2006; Fraser, 2007; Williams, 2007). This form of border thinking calls for a more productive ethic that re-frames the discussion in terms of the impacts that borders have on people in an unpredictably changing climate. This way, it seriously recognizes the necessary roles of borders and the barriers to adaptation that they create. While local climate change governance is still key to <em>soft resiliency</em>, this must be a radically democratic form of inter-institutional governance, where information for decision-making productively flows among local institutions across the border.&nbsp; This is made possible through transborder and cross-scalar synergistic collaborations that engage multiple institution-actors. While knowledge, information, and other resources play key roles in adaptation and in building and strengthening the capacity of multiple stakeholders, inter-institutional transborder adaptive collaboration can provide exceptional opportunities for the creation, management, exchange and application of relevant local climate change information and knowledge. Hence, transborder collaboration can greatly contribute to the important dimensions of adaptation&mdash;informed decision-making, stakeholder engagement, adaptation delivery, feedback and learning, and institutional capacity-building. This ultimately affirms the <em>Capabilities Framework</em> of Sen (1985;1999), which is motivated by the claim that freedom should play a key role in social evaluation and suggests complete consideration of what it is that people are free to do and what they do. This paper offers a wide range of capabilities that exhibit statistically significant inter-institutional transborder relations to community-managed adaptation and well-being, and that relations are complex and would be different for communities in different ecological and topographical zones. While the introduction of local transborder climate governance affirms and fulfills Sen&rsquo;s freedom in social evaluation, it also increases natural local adaptation capacity by enhancing participatory and transparent governance of local climate change initiative.&nbsp; Indeed, Indeed, the paper assumes that empowering local institutions is necessary in addressing the perennial root causes of vulnerability, especially exclusion and marginalization. <strong>Transformative Adaptation</strong>. In his critique of common adaptation concepts and practices, Taylor (2015) presses for the need to interrogate climate change adaptation not as a self-evident analytical framework and normative goal but as an array of discursive coordinates and institutional practices that themselves form the object of analysis.&nbsp; This necessitates a concept of adaptation that fashions a relatively cohesive body of ideas around the relationship between climate change and society into which issues of social change, power and environmental change are placed and solutions drawn.&nbsp; Generally, this brings to bear the concept of transformative adaptation, one that challenges the usual framing of nature as an inevitable threat and humans as helplessly exposed. Transformative adaptation is varied; it occurs at different levels and dimensions, mediated by power relations, but usually implies a systemic or paradigm shift, possibly triggered by intolerable losses due to climate change hazards.&nbsp; The change is likely to be radical and challenges the current status quo, although the experience of the change and whether it is radical, incremental or transformational depends upon where one is in the system (Pelling, 2011).&nbsp; Along this challenging concept, the study attempts to see beyond technocratic politics that seeks to contain the perceived threats posed by climate change within existing state-centric institutional parameters and offers critical thinking about climatic change and social transformation. <strong>Adaptation as political, historical, and local</strong>. With the rising prominence of adaptation as a viable solution to the threats posed by climate change and as a core element of <em>sustainable development</em>, which has now become the mainstream development paradigm, it is often said within the United Nations (UN) and non-government organization (NGO) circles that there has been something of a <em>paradigm shift</em> regarding how climate change is viewed and dealt with. While the focus used to be solely on finding technocratic solutions to climate-related hazards, it has now broadened to finding social solutions to vulnerabilities. This, however, is not really the case.&nbsp; Climate change adaptation&mdash;as it has been promoted by the UN system&mdash;retains many of the same prejudices and false assumptions of the traditional hazards paradigm which mistakenly views the sources of risk as being outside of society and separate from normal life. Without the existing concept of climate-related risk reduction to give it substance, adaptation would be a rather meaningless term. Like the <em>hazards paradigm</em> of climate change, adaptation, in this view, is fundamentally <em>apolitical </em>and <em>ahistorical</em>. The term <em>sustainable development</em> is simply what proponents of mainstream development (which pivots on economic growth) use to show that they favor <em>good</em> development. Challenging this, Ferguson (1994) describes mainstream development as a combined conceptual and institutional apparatus he calls the <em>anti-politics machine</em>. He calls it a <em>machine</em> because its methods of <em>depoliticization</em> are systematic and many of its agents of <em>depoliticization</em> are not fully conscious of this but rather more like cogs in a machine. The mainstream development discourse, he explains, follows its own logic, and part of this includes creating the need for apolitical, technical projects where the development apparatus can insert itself. Since the 1992 Earth Summit in Rio, when it was formally recognized by most states and large NGOs that global warming and other ecological crises are serious problems&mdash;and that traditional development practices were much to blame&mdash;mainstream development has transformed itself into <em>sustainable development</em>, the catch-all solution to every social and ecological problem on the planet. Attempting to be <em>apolitical</em> means much more than striving for scientific objectivity, it also means ignoring the fact that politics, history, and unequal power relations pervade every aspect of society. In this sense, mainstream development is in fact very political because, by not addressing existing social hierarchies, it only helps to maintain them. Further, as Ferguson explains, the side effects of the anti-politics machine expand the scope and reach of the state and its bureaucracies, &ldquo;not by directly or measurably making the state stronger, but by increasing the ways its forces of control interact with people in everyday life&rdquo; (Ferguson, 1994: 254-255). <strong>Vulnerability is structural and cuts across state-centric scales</strong>. As implied above, the <em>structural vulnerabilities paradigm</em> in climate change would recognize that it is usually the <em>decision-makers</em> and <em>expert communities</em> who are&mdash;either directly or indirectly&mdash;responsible for <em>creating </em>vulnerability in the first place because of their elite status and misguided perceptions. This paradigm, therefore, takes a more politically confrontational approach towards these groups instead of making the implicit assumption that they are the ones who fix the problem. A genuine vulnerabilities approach should aim to transform the communities that are <em>literally</em><em> vulnerable</em> to climate risk into the decision-makers of their own lives&mdash;a more politicized and radical process of social change. Meanwhile, engaging the philosophy of liberation bravely penned by Dussel (2011), which promotes the historical perspective of the periphery as a necessary requirement for the creation of a just world, this paper focuses on <em>border-community</em> and local institutions, which is an attempt to confront the apolitical, top-down and state-centric approaches to climate change adaptation. Post-structuralist thinkers, like Foucault (1978; 1991), argue that the state itself is more of an abstraction than a literal entity, and that individuals are manipulated not by any sovereign, but by <em>themselves </em>(&ldquo;governmentality&rdquo;) because the complex relations of power and control confined within administrative boundaries are so ubiquitous and the cultures of fear and desire so prevalent that individuals willingly surrender themselves to powerful forces in the name of <em>security</em> and <em>comfort</em> (also cited in Rabinow, 1984). <strong>Climate change is anthropogenic and socio-ecological</strong>. Eco-socialist thinkers, like O&rsquo;Connor (1996), argue that there is a second contradiction of state-sanctioned capitalism, whereby the over-exploitation of external nature and the disregard for natural limits (the <em>conditions </em>of production) eventually results in an ecological crisis of <em>under</em>-production. Foster et al (2010), on the other hand, do not see the ecological crisis as merely a question of under-production, but as a menace to the continuation of life (human and nonhuman) on earth.&nbsp; Due to neoliberal capitalism, &ldquo;[t]he planet is now dominated by a technologically potent but alienated humanity&mdash;alienated from both nature and itself; and hence ultimately destructive of everything around it&rdquo; (Foster et al., 2010:14). Neoliberal capitalism is causing several ecological crises&mdash;all of which are interconnected&mdash;including, among others, loss of biodiversity, disruptions to the nitrogen cycle, land use change, ocean acidification, chemical pollution, and, of course, global warming. To prevent the excessiveness of capitalism from reproducing itself, genuine adaptation must therefore be based upon a critical consciousness (recontextualization) and solidarity and a holistic outlook (reconciliation). This has been recognized by eco-socialists who also realize that the traditional options of <em>reform</em> and <em>revolution</em> must be transcended and that innovative&mdash;indeed, <em>adaptive</em>&mdash;methods of social transformation must be sought after. Of course, this does not mean there is widespread agreement on precisely what is to be done. Sale (2000) has promoted a new form of social organization called <em>bioregionalism</em>. He argues that the earth must be recognized as a living creature&mdash;<em>Gaea</em>&mdash;and respected and revered as such, with all human activities, including economics, politics, and culture, being shaped by the natural environment. Humans must be &ldquo;dwellers in the land,&rdquo; fully aware of the intricacies of their native ecosystems and the limits of natural resources (Sale, 2000: 42). Economically, the goal for every locality in a bioregion is pure self-sufficiency. For political organization, bioregionalism seeks to follow natural laws and demands decentralization and the reallocation of power to small, non-hierarchical units. &ldquo;The primary location of decision-making, therefore, and of political and economic control, should be the community, the more-or-less intimate grouping&hellip; at the close-knit village scale&hellip; or extended community scale&rdquo; (Sale, 2000: 94). Far more nuanced than Sale&rsquo;s bioregionalism, the <em>social ecology</em> perspective of Bookchin (2005) argues that all forms of hierarchy in human societies are directly based on man&rsquo;s domination of nature. Social ecologists go beyond the <em>Gaea</em> principle, which is seen as essentialist, attaching too much sacredness to nonhuman nature, and would rather see a creative interaction and communion between humanity and nonhuman nature that would reinforce equality and solidarity within human societies. The political implications of this would be what Bookchin calls <em>libertarian municipalism</em>: It is &ldquo;libertarian&rdquo; in that it advances a new politics of popular control over the material means of life&mdash;land, factories, transport, and the like. It is &ldquo;municipalist&rdquo; in that it advances a new politics of civil control over public affairs, mainly by means of direct face-to-face citizen assemblies. It is also confederalist, in that it seeks to foster interdependence&hellip; to avoid the parochialism of &ldquo;self-sufficient&rdquo; communities, which can easily become ingrown and self-aggrandizing&hellip; (Bookchin, 2005: 57) This vision differs from the bioregional idea in that it places more importance on the role of human beings to shape their own lives rather than allow them to be shaped by ecological conditions. The ultimate goal of an ecological society is to overcome all forms of hierarchy, whether political and economic or cultural and psychological, and this requires a sophisticated and productive relationship with the natural environment, as opposed to &ldquo;revering&rdquo; nature for its own sake (Bookchin, 2005).&nbsp; This paper &nbsp;assumes that such hierarchy can be avoided through a multi-institutional synergy operated in an ecological context. <strong>Adaptation requires radical sociological imagination</strong>. That climate change is now a planetary crisis should remind humanity that the frontiers and barriers erected by the state have become imaginary and that global cooperation is necessary. Building more <em>prefigurative autonomous zones</em>&mdash;which must increasingly connect to one another in inter-local networks of affinity&mdash;seems to be the only way to accomplish this task. This is where the border-community, which cuts across direct state control, can offer a promising venue for genuine adaptation. Such may facilitate the diminishing of what Marx (2007) refers to as false consciousness brought about by being slave to the state, even as it is why Freire (2009) sees critical pedagogy as a method to conscientize the masses. Moreover, the realization of critical consciousness&mdash;particularly <em>class consciousness</em>&mdash;across those who share ecology-defined vulnerability, poses a serious threat to the divisive hegemony of the state and capitalism. Building a collaborative and synergistic framework among those who share ecological zones, like institutions in border&ndash;communities, despite the controls set through political-administrative jurisdiction, is a minor but revolutionary step towards genuine class conscientization.&nbsp; This may create a communal capacity against the possibility that such consciousness may constantly be warded off through increasingly sophisticated statist modes of propaganda and ideology, as argued by Chomsky (1997). <strong>Resilient development directly addresses the root causes of vulnerability</strong>. While referring to a genuine vulnerabilities-based approach to the problem of climate change and development, it is important to remember the concept of &ldquo;progression of vulnerability,&rdquo; (Wisner et al., 2004: 51) where root causes (limited access to power and resources, and certain political or economic ideologies) lead to dynamic pressures (lack of or weak local institutions and skills, rapid population change, environmental degradation), which in turn bring about unsafe conditions (dangerous locations, weak infrastructure, fragile livelihoods, prevalence of disease, lack of preparedness). This process can be reversed in a &ldquo;progression of safety&rdquo; (Wisner et al., 2004:344) that addresses unsafe conditions in an at-risk community to promote resilient development. Following the <em>soft resiliency paradigm</em>, it emphasizes the importance of <em>who </em>directs adaptation activities to establish genuine resilience&mdash;namely, the vulnerable communities themselves. Such perspective thus promotes <em>community-managed adaptation</em>, purposely avoiding the term <em>community-based</em> because this may still make <em>elite</em> <em>decision-makers</em> and <em>experts</em> think that it is they who hold primary agency while only having to pay lip service to community participation. While engaging these arguments, this paper pursues a nuanced and integrative approach that seriously makes sense of the differentiated social realities in different political geographies bordering each other&mdash;the shared vulnerability of local social groups in a homogenous ecological zone, the capacity of local institutions as appropriators of a common-pool resource, and the possibility of inter-institutional transborder synergy as a frame for strategic community-managed adaptation<em>. </em> &nbsp; <strong>FRAMEWORK SYNTHESIS</strong> <strong>Theoretical Postulates</strong> In recent years, border-communities in international state borders have received considerable scholastic attention in mainstream literature, especially in political geography, development geography, and international relations, but these remain relatively unexplored in local, community-level research and practice. Considering the possible gap in development knowledge due to this limitation, this paper works on the general assumption that the complexity of the intra-state, subnational border-community may offer new insights on climate change vulnerability, optimize the role of local institutions in adaptation, and enhance the potential of transborder collaboration for subaltern adaptation&mdash;a contextual discourse that takes on the inherent but neglected mutuality of climate change vulnerability and adaptation. This overarching assumption is premised on the following postulates:</p>\r\n<ol>\r\n<li>The impacts of climate change may vary in different ecological and topographical zones, such that climate change vulnerability is differentiated among coastal, upland, and lowland communities;</li>\r\n<li>The <em>barangays</em> in a border community, when located in a homogenous ecological or topographical zone, may share related, if not similar, impacts of climate change variability, and therefore share common historical narratives of drought, flood, famine, hunger, pest-infestation, vector-borne disease and other climate change hazards. However, these <em>barangays</em> may not necessarily share similar adaptation strategies as such are possibly shaped by institutional policies relative to individual <em>barangays </em>and as framed from state-centric jurisdictional administrative policies;</li>\r\n<li>Mapping the shared and nuanced (either similar or asymmetric) vulnerability and adaptation strategy of different <em>barangays</em> in a border-community can give new and powerful insights to the discourse and practice related to climate change adaptation. A comparison, for instance, of local institutions in different <em>barangays</em> in a border-community and in different ecological zones may reveal new or hidden information in the discourse of political exclusion and marginalization, which are factors that significantly contribute to immediate and long-term vulnerability;</li>\r\n<li>While climate-related hazards and impacts differ among local communities in different ecological zones, this necessitates adaptation to become inevitably local, and local institutions as key to adaptation. Conversely, local institutions ultimately shape the structure of adaptation strategies as they mediate between individual and collective responses and facilitate possible adaptation strategies. This, therefore, necessities a closer look at local institutions and how they support and constrain local adaptation within and beyond the political border of the <em>barangay;</em> and,</li>\r\n<li>Climate change adaptation and community-development are two sides of the same coin. However, climate change is mainly framed not as a development issue but as an environmental concern, hence, the missing argument that vulnerability can be induced and heightened by poverty incidence and other inappropriate and inadequate socio-demographic structures, even as climate variability can worsen poverty incidence, food and health insecurity, social exclusion, among others.</li>\r\n</ol>\r\n<p><strong>Subaltern Adaptation: An Innovative Epistemological Construct</strong> As previously implied, resiliency in border-communities is understood here as a function and fusion of institutional strategy, inter-institutional partnership, and linked ecological and demographic realities. With this, the paper proposes re-framing local adaptation to inform the practice of community-level climate change governance, as follows:</p>\r\n<ol>\r\n<li><em>Re-imagining</em> the &lsquo;community&rsquo; as <em>spatio-temporal</em> (historical space) and <em>spatio-social</em> (anthropological space) unit within a particular ecological and topographical zone to reveal and address the possible limitations of state-centric scales in dealing with climate change. The border-community in this sense is a <em>socio-ecological</em> unit&mdash;the scale and locus of subnational community-level resilience&mdash;that is not only geared towards adapting to climate change, but more so to a distinct ecological reality;</li>\r\n<li><em>Rethinking</em> of adaptation in the border-community through a community-managed framework, in such a way that shared socio-ecological reality exposes how and why the issues and concerns of one barangay can impact other barangays beyond its administrative border, and the potential of trans-border synergy for adaptation and development among local institutions within and beyond political or administrative boundaries;</li>\r\n<li><em>Refocusing</em> the adaptation lens on local institutions to fill the glaring gaps in existing literature and practice, such as: the lack of middle-range framework that can help frame policy debates on climate change and local institutions; the absence of empirical comparative studies on institutional approaches (in different barangays as influenced by state policies) to adaptation to support policy interventions at the local level; the neglect of contextual (ecological, social, economic, political, and cultural) factors shared by institutions in the border-community (e.g., how local institutions utilize common-pool resources in finding solutions to common problems); and, the necessity of looking at climate change from the privileged position of local institutions. In line with this, adaptation programs must consider how local institutions can adopt and navigate around international and national climate change strategies; and,</li>\r\n<li><em>Redefining </em>resilience as a state of becoming, not a state of being; not the goal, but the process of adaptation. It is measured as progress, not perfection. Hence, it has to be strategic and dynamic and contextualized in the realities of the border-community. Like excellence, it is a habit that the local institutions in the border-community should be able to develop on their own, through their sincere awareness of their evolving shared vulnerability and the institutional lessons they derived from the collaborative adaptation strategies of their own choosing.&nbsp; With this redefinition of resiliency, the process and method of adaptation is subaltern&mdash;one that is derived and developed from the underside of climate change history, from the common historical experiences and shared narratives of the local institutions across subnational borders.</li>\r\n</ol>\r\n<p><strong>REFERENCES </strong></p>\r\n<ol>\r\n<li>Belcher, O. 2008. Everywhere and nowhere: the exception and the topological challenge in geography,&nbsp;<em>Antipode</em>, 40, 499&ndash;503</li>\r\n<li>Bookchin, M. 2005. The Ecology of Freedom: The Emergence and Dissolution of Hierarchy. Oakland: AK Press.</li>\r\n<li>Chomsky, N. 1997. Media Control: The Spectacular Achievements of Propaganda. New York: Seven Stories Press.</li>\r\n<li>Christoplos, I., Anderson, S., Arnold, M., Galaz, V., Hedger, M., Klein, R. and Le Goulven, 2009. The Human Dimension of Climate Adaptation: The Importance of Local and Institutional Issues. Stockholm: Ministry of Foreign Affairs, Commission on Climate Change and Development.</li>\r\n<li>Connolly, W. 2007. The complexities of sovereignty. In Giorgio Agamben: sovereignty and life. Matthew Calarco and Steven DeCaroli, eds.&nbsp;Stanford, CA, Stanford University Press.</li>\r\n<li>Dussel, E. 2011. Politics of Liberation: A Critical World History. Translated by Thia Cooper. London: SCM Press.</li>\r\n<li>Foster, JB., et al. 2010. The Ecological Rift: Capitalism&rsquo;s War on the Earth. New York: Monthly Review Press.</li>\r\n<li>Fraser, N. 2007. Transnationalizing the public sphere: on the legitimacy and efficacy of public opinion in a post-westphalian world. In Identities, affiliations, and allegiances. Seyla Benhabib et al. eds.&nbsp;New York, Cambridge University Press.</li>\r\n<li>Freire, P. 2009. Pedagogy of the Oppressed. New York: Continuum.</li>\r\n<li>Ge, M., K. Lebling, K. Levin, and J. Friedrich. 2019. &ldquo;Tracking Progress of the 2020 Climate Turning Point.&rdquo; Working Paper. Washington, DC: World Resources Institute. <a href=\"https://wri.org/2020-turning-pointprogress\">https://wri.org/2020-turning-pointprogress</a></li>\r\n<li>Goemans, H. 2006. Bounded communities: territoriality, territorial attachment, and conflict. In Territoriality in conflict in an era of globalization. Miles Kahler &amp; Barbara F. Walter, eds. Cambridge, Cambridge University Press.</li>\r\n<li>2022 Climate Change 2022:&nbsp;Impacts, Adaptation and Vulnerability. Working Group II contribution to the 6<sup>th</sup> Assessment Report of the Intergovernmental Panel on Climate Change. Cambridge University Press.</li>\r\n<li>Marx, K. 2007.&nbsp;Economic and Philosophic Manuscripts of 1844. Translated by Martin Milligan. Dover Books on Western Philosophy. New York, NY: Dover Publications.</li>\r\n<li>Pelling, M. 2011. Adaptation to Climate Change: From Resilience to Transformation. London and New York: Routledge.</li>\r\n<li>Rabinow, P., ed. 1984. The Foucault Reader. New York: Pantheon.</li>\r\n<li>Sale, K. 2000. Dwellers in the Land: The Bioregional Vision. Athens: University of Georgia Press.</li>\r\n<li>Scott, J. 1998. Seeing Like a State: How Certain Schemes to Improve Human Condition Have Failed. New Haven: Yale University Press.</li>\r\n<li>Sen, A. 1981. Poverty and Famines: An Essay on Entitlement and Deprivation. Oxford: Clarendon Press.</li>\r\n<li>Taylor, M. 2015. The Political Ecology of Climate Change Adaptation. London and New York: Routledge.</li>\r\n<li>2024. Adaptation Gap 2024. <a href=\"https://www.unep.org/resources/adaptation-gap-report-2024\">https://www.unep.org/resources/adaptation-gap-report-2024</a></li>\r\n<li>United Nations. 2020. Flagship UN study shows accelerating climate change on land, sea and in the atmosphere. <a href=\"https://news.un.org/en/story/2020/03/1059061\">https://news.un.org/en/story/2020/03/1059061</a></li>\r\n<li>2024. Climate Reports. <u>https://www.un.org/en/climatechange/reports</u></li>\r\n<li>Williams, M. 2007. Nonterritorial boundaries of citizenship. In Identities, affiliations, and allegiances. Seyla Benhabib et al., eds.&nbsp;New York, Cambridge University Press.</li>\r\n<li>Wisner, B., et al. 2004. At Risk: Natural Hazards, People&rsquo;s Vulnerability and Disasters 2nd ed. New York: Routledge.</li>\r\n</ol>', NULL, 5, 0, 'articles/pdf/NxEy0ivfS0AKVNJd3ryCnwuXgBEy81eU4Y6YhcKN.pdf', NULL, 1, 'published', '2025-04-02', 1, 'https://creativecommons.org/licenses/by/4.0/', 'Dascil, Rommel Meneses', 2025, NULL, '2025-04-05 00:01:26', '2025-04-10 14:03:01'),
(2, 'Climate Change Impact on Agricultural Productivity', '<p>A comprehensive analysis of how climate change affects agricultural productivity in South Asian countries.</p>', NULL, NULL, NULL, 'Dr. Priya Singh', 'priya.singh@example.com', 'National Agricultural Research Center', 'India', 'Climate Change, Agriculture, Productivity, South Asia', NULL, 'Short Notes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'articles/sample2.pdf', NULL, 1, 'published', NULL, 0, NULL, NULL, 2025, NULL, '2025-04-05 00:01:26', '2025-04-08 02:26:47');
INSERT INTO `articles` (`id`, `title`, `abstract`, `content`, `references`, `author_contributor_list`, `author_name`, `email`, `affiliation`, `country`, `keywords`, `pages`, `category`, `volume`, `issue`, `doi`, `pdf_file`, `html_file`, `docx_file`, `html_content`, `page_no`, `views`, `likes`, `manuscript_path`, `cover_letter_path`, `is_published`, `status`, `published_date`, `has_permissions`, `license_url`, `copyright_holder`, `copyright_year`, `featured_image`, `created_at`, `updated_at`) VALUES
(3, 'Advances in Quantum Computing', '<p>This paper discusses recent breakthroughs in quantum computing and their potential applications.</p>', NULL, '<div class=\"min-w-0\">\r\n<div class=\"mt-4 text-lg font-semibold text-gray-900 break-words dark:text-white lg:text-2xl\">SQLSTATE[42S22]: Column not found: 1054 Unknown column \'status\' in \'field list\' (Connection: mysql, SQL: update `articles` set `abstract` = &lt;p&gt;This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.&lt;/p&gt; &lt;p&gt;This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.&lt;/p&gt; &lt;p&gt;This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.&lt;/p&gt;, `references` = &lt;p&gt;This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.&lt;/p&gt;, `author_contributor_list` = &lt;p&gt;This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.&lt;/p&gt;, `pages` = swewe, `published_date` = 2025-04-25 00:00:00, `has_permissions` = 1, `license_url` = http://localhost:8000/admin/articles/1/edit, `copyright_holder` = 2323, `copyright_year` = 2025, `status` = published, `articles`.`updated_at` = 2025-04-05 07:34:45 where `id` = 1)</div>\r\n</div>\r\n<div class=\"hidden text-right shrink-0 md:block md:min-w-64 md:max-w-80\">&nbsp;</div>', '<div class=\"min-w-0\">\r\n<div class=\"mt-4 text-lg font-semibold text-gray-900 break-words dark:text-white lg:text-2xl\">SQLSTATE[42S22]: Column not found: 1054 Unknown column \'status\' in \'field list\' (Connection: mysql, SQL: update `articles` set `abstract` = &lt;p&gt;This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.&lt;/p&gt; &lt;p&gt;This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.&lt;/p&gt; &lt;p&gt;This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.&lt;/p&gt;, `references` = &lt;p&gt;This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.&lt;/p&gt;, `author_contributor_list` = &lt;p&gt;This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.This paper explores the application of machine learning techniques in bioinformatics research, focusing on genomic data analysis.&lt;/p&gt;, `pages` = swewe, `published_date` = 2025-04-25 00:00:00, `has_permissions` = 1, `license_url` = http://localhost:8000/admin/articles/1/edit, `copyright_holder` = 2323, `copyright_year` = 2025, `status` = published, `articles`.`updated_at` = 2025-04-05 07:34:45 where `id` = 1)</div>\r\n</div>\r\n<div class=\"hidden text-right shrink-0 md:block md:min-w-64 md:max-w-80\">&nbsp;</div>', 'Dr. Amit Sharma', 'amit.sharma@example.com', 'Delhi University', 'India', 'Quantum Computing, Quantum Mechanics, Quantum Algorithms', '121', 'Theses Dissertations', NULL, NULL, 'sadasd', 'articles/pdf/pjUD4MVVg0Zk2ioS3nYIDgQ5AhRmXA2HtW5XEyPx.pdf', NULL, NULL, '<p>asdsd</p>', NULL, 3, 0, 'articles/pdf/pjUD4MVVg0Zk2ioS3nYIDgQ5AhRmXA2HtW5XEyPx.pdf', NULL, 1, 'published', '2025-05-02', 1, 'http://localhost:8000/admin/articles/1/edit', '2323', 2025, NULL, '2025-04-05 00:01:26', '2025-04-10 03:25:36'),
(4, 'Case Study: Nutrition', 'This is a research paper about Nutrition. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Deepika Malhotra', 'dr..deepika.malhotra@research.org', 'Indian Institute of Science', 'China', 'Nutrition', NULL, 'Nutrition', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 349, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-28 00:04:52', '2025-03-13 00:04:52'),
(5, 'Applications of Linguistics', 'This is a research paper about Linguistics. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Sunita Patel', 'dr..sunita.patel@university.edu', 'Punjab University', 'Australia', 'Linguistics', NULL, 'Linguistics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 345, 0, 'articles/sample5.pdf', NULL, 1, 'draft', '2025-03-12', 0, NULL, NULL, NULL, NULL, '2025-02-08 00:04:52', '2025-04-01 00:04:52'),
(6, 'Study of Arts', 'This is a research paper about Arts. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Meera Banerjee', 'dr..meera.banerjee@institute.ac.in', 'Aligarh Muslim University', 'India', 'Arts', NULL, 'Arts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 78, 0, 'articles/sample5.pdf', NULL, 1, 'draft', '2025-03-28', 0, NULL, NULL, NULL, NULL, '2025-03-12 00:04:52', '2025-04-04 00:04:52'),
(7, 'Perspectives on Architecture', 'This is a research paper about Architecture. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Neha Verma', 'dr..neha.verma@gmail.com', 'Punjab University', 'Germany', 'Architecture', NULL, 'Architecture', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 103, 0, 'articles/sample3.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-28 00:04:52', '2025-03-09 00:04:52'),
(8, 'Analysis of Machine Learning', 'This is a research paper about Machine Learning. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Ananya Sen', 'dr..ananya.sen@research.org', 'Banaras Hindu University', 'China', 'Machine Learning', NULL, 'Machine Learning', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 401, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-01-25 00:04:52', '2025-03-29 00:04:52'),
(9, 'Critical Review of Statistics', 'This is a research paper about Statistics. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Vikram Mehta', 'dr..vikram.mehta@research.org', 'University of Mumbai', 'Germany', 'Statistics', NULL, 'Statistics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 391, 0, 'articles/sample4.pdf', NULL, 1, 'draft', '2025-03-11', 0, NULL, NULL, NULL, NULL, '2025-02-10 00:04:52', '2025-03-28 00:04:52'),
(10, 'Study of Aerospace Engineering', 'This is a research paper about Aerospace Engineering. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Sameer Joshi', 'dr..sameer.joshi@institute.ac.in', 'Indian Statistical Institute', 'India', 'Aerospace Engineering', NULL, 'Aerospace Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 363, 0, 'articles/sample4.pdf', NULL, 1, 'draft', '2025-04-04', 0, NULL, NULL, NULL, NULL, '2025-02-06 00:04:52', '2025-03-19 00:04:52'),
(11, 'Critical Review of Strategic Management', 'This is a research paper about Strategic Management. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Lakshmi Narayan', 'dr..lakshmi.narayan@institute.ac.in', 'Aligarh Muslim University', 'China', 'Strategic Management', NULL, 'Strategic Management', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 470, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-01-10 00:04:52', '2025-03-12 00:04:52'),
(12, 'Developments in Engineering', 'This is a research paper about Engineering. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Kiran Reddy', 'dr..kiran.reddy@institute.ac.in', 'Aligarh Muslim University', 'USA', 'Engineering', NULL, 'Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 286, 0, 'articles/sample2.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-05 00:04:52', '2025-03-12 00:04:52'),
(13, 'aPerspectives on Epistemology', '<p>This is a research paper about Epistemology. It explores various aspects and applications in this field.</p>', NULL, NULL, NULL, 'Dr. Suresh Iyer', 'dr.suresh.iyer@university.edu', 'University of Mumbai', 'USA', 'Epistemology', NULL, 'Epistemology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 405, 0, 'articles/sample4.pdf', NULL, 1, 'published', '2025-04-03', 0, NULL, NULL, 2025, NULL, '2025-03-27 00:04:52', '2025-04-08 00:12:59'),
(14, 'Analysis of Network Engineering', 'This is a research paper about Network Engineering. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Sameer Joshi', 'dr..sameer.joshi@institute.ac.in', 'Indian Statistical Institute', 'China', 'Network Engineering', NULL, 'Network Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 142, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-01-25 00:04:52', '2025-03-30 00:04:52'),
(15, 'Analysis of Operations Research', 'This is a research paper about Operations Research. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Neha Verma', 'dr..neha.verma@gmail.com', 'National Institute of Technology', 'Australia', 'Operations Research', NULL, 'Operations Research', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 391, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-07 00:04:52', '2025-03-12 00:04:52'),
(16, 'Research on Management', 'This is a research paper about Management. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Priya Singh', 'dr..priya.singh@research.org', 'Punjab University', 'Canada', 'Management', NULL, 'Management', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 142, 0, 'articles/sample2.pdf', NULL, 1, 'draft', '2025-03-14', 0, NULL, NULL, NULL, NULL, '2025-03-04 00:04:52', '2025-03-06 00:04:52'),
(17, 'Investigation of Languages', 'This is a research paper about Languages. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Kavita Desai', 'dr..kavita.desai@research.org', 'Banaras Hindu University', 'Germany', 'Languages', NULL, 'Languages', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 80, 0, 'articles/sample3.pdf', NULL, 1, 'draft', '2025-03-09', 0, NULL, NULL, NULL, NULL, '2025-01-19 00:04:52', '2025-03-23 00:04:52'),
(18, 'Theoretical Framework for Artificial Intelligence', 'This is a research paper about Artificial Intelligence. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Nandini Sharma', 'dr..nandini.sharma@institute.ac.in', 'Tata Institute of Fundamental Research', 'Germany', 'Artificial Intelligence', NULL, 'Artificial Intelligence', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 269, 0, 'articles/sample5.pdf', NULL, 1, 'draft', '2025-03-18', 0, NULL, NULL, NULL, NULL, '2025-01-21 00:04:52', '2025-03-21 00:04:52'),
(19, 'Applications of Consumer Behavior', 'This is a research paper about Consumer Behavior. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Arjun Saxena', 'dr..arjun.saxena@gmail.com', 'National Institute of Technology', 'France', 'Consumer Behavior', NULL, 'Consumer Behavior', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 387, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-09 00:04:52', '2025-03-29 00:04:52'),
(20, 'Analysis of Literature', 'This is a research paper about Literature. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Prakash Rao', 'dr..prakash.rao@university.edu', 'Indian Statistical Institute', 'USA', 'Literature', NULL, 'Literature', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 99, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-18 00:04:52', '2025-03-16 00:04:52'),
(21, 'Theoretical Framework for Software Engineering', 'This is a research paper about Software Engineering. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Kiran Reddy', 'dr..kiran.reddy@gmail.com', 'Indian Institute of Science', 'Japan', 'Software Engineering', NULL, 'Software Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 98, 0, 'articles/sample2.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-01-31 00:04:52', '2025-03-28 00:04:52'),
(22, 'Case Study: Architecture', 'This is a research paper about Architecture. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Priya Singh', 'dr..priya.singh@institute.ac.in', 'University of Delhi', 'India', 'Architecture', NULL, 'Architecture', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 275, 0, 'articles/sample2.pdf', NULL, 1, 'draft', '2025-03-15', 0, NULL, NULL, NULL, NULL, '2025-01-20 00:04:52', '2025-04-03 00:04:52'),
(23, 'Survey of Religious Studies', 'This is a research paper about Religious Studies. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Deepika Malhotra', 'dr..deepika.malhotra@institute.ac.in', 'University of Mumbai', 'Germany', 'Religious Studies', NULL, 'Religious Studies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-27 00:04:52', '2025-03-26 00:04:52'),
(24, 'Advances in Genetics', 'This is a research paper about Genetics. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Vikram Mehta', 'dr..vikram.mehta@research.org', 'Punjab University', 'Japan', 'Genetics', NULL, 'Genetics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 399, 0, 'articles/sample1.pdf', NULL, 1, 'draft', '2025-03-30', 0, NULL, NULL, NULL, NULL, '2025-03-03 00:04:52', '2025-03-31 00:04:52'),
(25, 'Critical Review of Biology', 'This is a research paper about Biology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Priya Singh', 'dr..priya.singh@university.edu', 'Jawaharlal Nehru University', 'China', 'Biology', NULL, 'Biology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 156, 0, 'articles/sample3.pdf', NULL, 1, 'draft', '2025-03-20', 0, NULL, NULL, NULL, NULL, '2025-02-25 00:04:52', '2025-04-01 00:04:52'),
(26, 'Novel Approach to Entrepreneurship', 'This is a research paper about Entrepreneurship. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Vikram Mehta', 'dr..vikram.mehta@university.edu', 'University of Mumbai', 'India', 'Entrepreneurship', NULL, 'Entrepreneurship', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 362, 0, 'articles/sample2.pdf', NULL, 1, 'draft', '2025-03-07', 0, NULL, NULL, NULL, NULL, '2025-03-29 00:04:52', '2025-03-18 00:04:52'),
(27, 'Case Study: Gender Studies', 'This is a research paper about Gender Studies. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Kiran Reddy', 'dr..kiran.reddy@university.edu', 'Tata Institute of Fundamental Research', 'China', 'Gender Studies', NULL, 'Gender Studies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 90, 0, 'articles/sample2.pdf', NULL, 1, 'draft', '2025-04-03', 0, NULL, NULL, NULL, NULL, '2025-01-24 00:04:52', '2025-03-26 00:04:52'),
(28, 'Survey of Sports Science', 'This is a research paper about Sports Science. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Nandini Sharma', 'dr..nandini.sharma@university.edu', 'Jawaharlal Nehru University', 'USA', 'Sports Science', NULL, 'Sports Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 339, 0, 'articles/sample4.pdf', NULL, 1, 'draft', '2025-03-25', 0, NULL, NULL, NULL, NULL, '2025-03-01 00:04:52', '2025-03-26 00:04:52'),
(29, 'New Insights into Literature', 'This is a research paper about Literature. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Rahul Gupta', 'dr..rahul.gupta@research.org', 'Jawaharlal Nehru University', 'France', 'Literature', NULL, 'Literature', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 97, 0, 'articles/sample2.pdf', NULL, 1, 'draft', '2025-03-23', 0, NULL, NULL, NULL, NULL, '2025-03-25 00:04:52', '2025-03-25 00:04:52'),
(30, 'Analysis of Sustainable Development', 'This is a research paper about Sustainable Development. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Deepika Malhotra', 'dr..deepika.malhotra@gmail.com', 'Punjab University', 'Germany', 'Sustainable Development', NULL, 'Sustainable Development', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 87, 0, 'articles/sample3.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-08 00:04:52', '2025-03-28 00:04:52'),
(31, 'Novel Approach to Law', 'This is a research paper about Law. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Deepika Malhotra', 'dr..deepika.malhotra@university.edu', 'University of Mumbai', 'UK', 'Law', NULL, 'Law', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 322, 0, 'articles/sample4.pdf', NULL, 1, 'draft', '2025-03-16', 0, NULL, NULL, NULL, NULL, '2025-02-26 00:04:52', '2025-03-07 00:04:52'),
(32, 'Developments in Theatre Studies', 'This is a research paper about Theatre Studies. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Lakshmi Narayan', 'dr..lakshmi.narayan@university.edu', 'Indian Statistical Institute', 'Australia', 'Theatre Studies', NULL, 'Theatre Studies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 74, 0, 'articles/sample2.pdf', NULL, 1, 'draft', '2025-03-28', 0, NULL, NULL, NULL, NULL, '2025-01-23 00:04:52', '2025-03-28 00:04:52'),
(33, 'Developments in Film Studies', 'This is a research paper about Film Studies. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Amit Sharma', 'dr..amit.sharma@university.edu', 'University of Mumbai', 'Germany', 'Film Studies', NULL, 'Film Studies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 194, 0, 'articles/sample1.pdf', NULL, 1, 'draft', '2025-03-06', 0, NULL, NULL, NULL, NULL, '2025-02-13 00:04:52', '2025-03-31 00:04:52'),
(34, 'Applications of Astronomy', 'This is a research paper about Astronomy. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Neha Verma', 'dr..neha.verma@gmail.com', 'National Institute of Technology', 'Canada', 'Astronomy', NULL, 'Astronomy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 72, 0, 'articles/sample5.pdf', NULL, 1, 'draft', '2025-03-26', 0, NULL, NULL, NULL, NULL, '2025-02-19 00:04:52', '2025-03-07 00:04:52'),
(35, 'Investigation of Journalism', 'This is a research paper about Journalism. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Ananya Sen', 'dr..ananya.sen@gmail.com', 'All India Institute of Medical Sciences', 'Japan', 'Journalism', NULL, 'Journalism', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 427, 0, 'articles/sample5.pdf', NULL, 1, 'draft', '2025-03-30', 0, NULL, NULL, NULL, NULL, '2025-03-12 00:04:52', '2025-03-07 00:04:52'),
(36, 'Case Study: Musicology', 'This is a research paper about Musicology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Mohammed Khan', 'dr..mohammed.khan@gmail.com', 'Tata Institute of Fundamental Research', 'Germany', 'Musicology', NULL, 'Musicology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 429, 0, 'articles/sample1.pdf', NULL, 1, 'draft', '2025-03-25', 0, NULL, NULL, NULL, NULL, '2025-02-17 00:04:52', '2025-03-28 00:04:52'),
(37, 'Study of Business Administration', 'This is a research paper about Business Administration. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Priya Singh', 'dr..priya.singh@research.org', 'University of Mumbai', 'China', 'Business Administration', NULL, 'Business Administration', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 461, 0, 'articles/sample3.pdf', NULL, 1, 'draft', '2025-04-04', 0, NULL, NULL, NULL, NULL, '2025-02-17 00:04:52', '2025-04-08 00:22:28'),
(38, 'New Insights into Robotics', 'This is a research paper about Robotics. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Neha Verma', 'dr..neha.verma@gmail.com', 'National Institute of Technology', 'USA', 'Robotics', NULL, 'Robotics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 450, 0, 'articles/sample5.pdf', NULL, 1, 'draft', '2025-03-12', 0, NULL, NULL, NULL, NULL, '2025-02-21 00:04:52', '2025-04-08 08:28:27'),
(39, 'Perspectives on Marketing', 'This is a research paper about Marketing. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Kavita Desai', 'dr..kavita.desai@university.edu', 'Banaras Hindu University', 'USA', 'Marketing', NULL, 'Marketing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 0, 'articles/sample2.pdf', NULL, 1, 'draft', '2025-03-12', 0, NULL, NULL, NULL, NULL, '2025-01-18 00:04:52', '2025-03-27 00:04:52'),
(40, 'Developments in Consumer Behavior', 'This is a research paper about Consumer Behavior. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Vikram Mehta', 'dr..vikram.mehta@university.edu', 'University of Calcutta', 'India', 'Consumer Behavior', NULL, 'Consumer Behavior', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 170, 0, 'articles/sample2.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-17 00:04:52', '2025-03-21 00:04:52'),
(41, 'Perspectives on Microbiology', 'This is a research paper about Microbiology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Nandini Sharma', 'dr..nandini.sharma@institute.ac.in', 'Tata Institute of Fundamental Research', 'France', 'Microbiology', NULL, 'Microbiology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 423, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-15 00:04:52', '2025-03-08 00:04:52'),
(42, 'Applications of Medical Science', 'This is a research paper about Medical Science. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Rajesh Kumar', 'dr..rajesh.kumar@gmail.com', 'Jawaharlal Nehru University', 'China', 'Medical Science', NULL, 'Medical Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 466, 0, 'articles/sample3.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-08 00:04:52', '2025-03-13 00:04:52'),
(43, 'Research on Aesthetics', 'This is a research paper about Aesthetics. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Ananya Sen', 'dr..ananya.sen@institute.ac.in', 'Tata Institute of Fundamental Research', 'France', 'Aesthetics', NULL, 'Aesthetics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 235, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-02 00:04:52', '2025-03-08 00:04:52'),
(44, 'Developments in Environmental Science', 'This is a research paper about Environmental Science. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Sameer Joshi', 'dr..sameer.joshi@institute.ac.in', 'National Institute of Technology', 'Australia', 'Environmental Science', NULL, 'Environmental Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 348, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-04 00:04:52', '2025-03-13 00:04:52'),
(45, 'New Insights into Astronomy', 'This is a research paper about Astronomy. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Sunita Patel', 'dr..sunita.patel@research.org', 'All India Institute of Medical Sciences', 'India', 'Astronomy', NULL, 'Astronomy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 440, 0, 'articles/sample4.pdf', NULL, 1, 'draft', '2025-03-16', 0, NULL, NULL, NULL, NULL, '2025-03-16 00:04:52', '2025-03-09 00:04:52'),
(46, 'Case Study: Cognitive Science', 'This is a research paper about Cognitive Science. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Deepika Malhotra', 'dr..deepika.malhotra@university.edu', 'University of Calcutta', 'France', 'Cognitive Science', NULL, 'Cognitive Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 67, 0, 'articles/sample3.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-24 00:04:52', '2025-03-23 00:04:52'),
(47, 'Case Study: Cultural Studies', 'This is a research paper about Cultural Studies. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Kavita Desai', 'dr..kavita.desai@institute.ac.in', 'Jawaharlal Nehru University', 'Canada', 'Cultural Studies', NULL, 'Cultural Studies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 98, 0, 'articles/sample3.pdf', NULL, 1, 'draft', '2025-03-08', 0, NULL, NULL, NULL, NULL, '2025-01-20 00:04:52', '2025-03-23 00:04:52'),
(48, 'New Insights into Marketing', 'This is a research paper about Marketing. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Rajesh Kumar', 'dr..rajesh.kumar@institute.ac.in', 'University of Delhi', 'India', 'Marketing', NULL, 'Marketing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 285, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-02 00:04:52', '2025-03-23 00:04:52'),
(49, 'Theoretical Framework for Film Studies', 'This is a research paper about Film Studies. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Rahul Gupta', 'dr..rahul.gupta@institute.ac.in', 'Indian Statistical Institute', 'Japan', 'Film Studies', NULL, 'Film Studies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 268, 0, 'articles/sample3.pdf', NULL, 1, 'draft', '2025-03-28', 0, NULL, NULL, NULL, NULL, '2025-01-05 00:04:52', '2025-03-23 00:04:52'),
(50, 'Analysis of Biotechnology', 'This is a research paper about Biotechnology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Nandini Sharma', 'dr..nandini.sharma@university.edu', 'University of Calcutta', 'Germany', 'Biotechnology', NULL, 'Biotechnology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 408, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-01-20 00:04:52', '2025-03-15 00:04:52'),
(51, 'Critical Review of Public Health', 'This is a research paper about Public Health. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Lakshmi Narayan', 'dr..lakshmi.narayan@gmail.com', 'University of Mumbai', 'Australia', 'Public Health', NULL, 'Public Health', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 199, 0, 'articles/sample3.pdf', NULL, 1, 'draft', '2025-03-07', 0, NULL, NULL, NULL, NULL, '2025-03-08 00:04:52', '2025-03-09 00:04:52'),
(52, 'Survey of Philosophy', 'This is a research paper about Philosophy. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Suresh Iyer', 'dr..suresh.iyer@research.org', 'Punjab University', 'Australia', 'Philosophy', NULL, 'Philosophy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-01-26 00:04:52', '2025-03-20 00:04:52'),
(53, 'Survey of Criminology', 'This is a research paper about Criminology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Prakash Rao', 'dr..prakash.rao@gmail.com', 'University of Delhi', 'China', 'Criminology', NULL, 'Criminology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, 0, 'articles/sample4.pdf', NULL, 1, 'draft', '2025-04-02', 0, NULL, NULL, NULL, NULL, '2025-01-17 00:04:52', '2025-03-29 00:04:52'),
(54, 'Study of Archaeology', 'This is a research paper about Archaeology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Vikram Mehta', 'dr..vikram.mehta@research.org', 'All India Institute of Medical Sciences', 'China', 'Archaeology', NULL, 'Archaeology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 437, 0, 'articles/sample2.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-17 00:04:52', '2025-03-10 00:04:52'),
(55, 'Analysis of Architecture', 'This is a research paper about Architecture. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Priya Singh', 'dr..priya.singh@gmail.com', 'Tata Institute of Fundamental Research', 'France', 'Architecture', NULL, 'Architecture', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 139, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-11 00:04:52', '2025-03-21 00:04:52'),
(56, 'Investigation of Epistemology', 'This is a research paper about Epistemology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Vikram Mehta', 'dr..vikram.mehta@research.org', 'Indian Institute of Technology, Delhi', 'UK', 'Epistemology', NULL, 'Epistemology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 63, 0, 'articles/sample3.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-01-07 00:04:52', '2025-03-31 00:04:52'),
(57, 'Developments in Project Management', 'This is a research paper about Project Management. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Kiran Reddy', 'dr..kiran.reddy@university.edu', 'Jawaharlal Nehru University', 'USA', 'Project Management', NULL, 'Project Management', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 178, 0, 'articles/sample4.pdf', NULL, 1, 'draft', '2025-03-31', 0, NULL, NULL, NULL, NULL, '2025-01-20 00:04:52', '2025-04-01 00:04:52'),
(58, 'Investigation of Biomedical Engineering', 'This is a research paper about Biomedical Engineering. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Rahul Gupta', 'dr..rahul.gupta@research.org', 'Punjab University', 'Canada', 'Biomedical Engineering', NULL, 'Biomedical Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 223, 0, 'articles/sample3.pdf', NULL, 1, 'draft', '2025-03-23', 0, NULL, NULL, NULL, NULL, '2025-02-28 00:04:52', '2025-03-20 00:04:52'),
(59, 'Research on Human Resource Management', 'This is a research paper about Human Resource Management. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Sameer Joshi', 'dr..sameer.joshi@university.edu', 'Jawaharlal Nehru University', 'Australia', 'Human Resource Management', NULL, 'Human Resource Management', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 464, 0, 'articles/sample4.pdf', NULL, 1, 'draft', '2025-03-24', 0, NULL, NULL, NULL, NULL, '2025-02-22 00:04:52', '2025-04-08 00:22:14'),
(60, 'Theoretical Framework for Robotics', 'This is a research paper about Robotics. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Kiran Reddy', 'dr..kiran.reddy@gmail.com', 'University of Delhi', 'UK', 'Robotics', NULL, 'Robotics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 306, 0, 'articles/sample5.pdf', NULL, 1, 'draft', '2025-03-18', 0, NULL, NULL, NULL, NULL, '2025-03-22 00:04:52', '2025-03-16 00:04:52'),
(61, 'Critical Review of Architecture', 'This is a research paper about Architecture. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Rajesh Kumar', 'dr..rajesh.kumar@institute.ac.in', 'Aligarh Muslim University', 'Germany', 'Architecture', NULL, 'Architecture', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 285, 0, 'articles/sample2.pdf', NULL, 1, 'draft', '2025-03-25', 0, NULL, NULL, NULL, NULL, '2025-01-23 00:04:52', '2025-04-04 00:04:52'),
(62, 'Developments in Theatre Studies', 'This is a research paper about Theatre Studies. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Sameer Joshi', 'dr..sameer.joshi@institute.ac.in', 'Tata Institute of Fundamental Research', 'Germany', 'Theatre Studies', NULL, 'Theatre Studies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 158, 0, 'articles/sample2.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-10 00:04:52', '2025-03-15 00:04:52'),
(63, 'Study of Information Technology', 'This is a research paper about Information Technology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Kiran Reddy', 'dr..kiran.reddy@gmail.com', 'National Institute of Technology', 'USA', 'Information Technology', NULL, 'Information Technology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 401, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-19 00:04:52', '2025-03-26 00:04:52'),
(64, 'Perspectives on Chemistry', 'This is a research paper about Chemistry. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Sunita Patel', 'dr..sunita.patel@institute.ac.in', 'Tata Institute of Fundamental Research', 'Japan', 'Chemistry', NULL, 'Chemistry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 460, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-04 00:04:52', '2025-03-27 00:04:52'),
(65, 'Applications of Epistemology', 'This is a research paper about Epistemology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Suresh Iyer', 'dr..suresh.iyer@gmail.com', 'Banaras Hindu University', 'UK', 'Epistemology', NULL, 'Epistemology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 404, 0, 'articles/sample4.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-13 00:04:52', '2025-03-31 00:04:52'),
(66, 'Advances in Literature', 'This is a research paper about Literature. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Sameer Joshi', 'dr..sameer.joshi@gmail.com', 'Tata Institute of Fundamental Research', 'Japan', 'Literature', NULL, 'Literature', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 228, 0, 'articles/sample4.pdf', NULL, 1, 'draft', '2025-03-08', 0, NULL, NULL, NULL, NULL, '2025-03-13 00:04:52', '2025-03-10 00:04:52'),
(67, 'Study of Languages', 'This is a research paper about Languages. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Ananya Sen', 'dr..ananya.sen@research.org', 'University of Mumbai', 'France', 'Languages', NULL, 'Languages', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 262, 0, 'articles/sample2.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-02 00:04:52', '2025-03-10 00:04:52'),
(68, 'Applications of Psychology', 'This is a research paper about Psychology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Mohammed Khan', 'dr..mohammed.khan@research.org', 'Indian Statistical Institute', 'China', 'Psychology', NULL, 'Psychology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 62, 0, 'articles/sample3.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-13 00:04:52', '2025-03-23 00:04:52'),
(69, 'New Insights into Political Science', 'This is a research paper about Political Science. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Priya Singh', 'dr..priya.singh@institute.ac.in', 'Aligarh Muslim University', 'USA', 'Political Science', NULL, 'Political Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 236, 0, 'articles/sample2.pdf', NULL, 1, 'draft', '2025-04-02', 0, NULL, NULL, NULL, NULL, '2025-02-11 00:04:52', '2025-04-02 00:04:52'),
(70, 'New Insights into Developmental Psychology', 'This is a research paper about Developmental Psychology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Priya Singh', 'dr..priya.singh@research.org', 'Punjab University', 'France', 'Developmental Psychology', NULL, 'Developmental Psychology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 442, 0, 'articles/sample5.pdf', NULL, 1, 'draft', '2025-03-27', 0, NULL, NULL, NULL, NULL, '2025-03-27 00:04:52', '2025-04-08 08:29:07'),
(71, 'Advances in Engineering', 'This is a research paper about Engineering. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Neha Verma', 'dr..neha.verma@gmail.com', 'Punjab University', 'Canada', 'Engineering', NULL, 'Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 429, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-04 00:04:52', '2025-03-11 00:04:52'),
(72, 'Critical Review of Information Technology', 'This is a research paper about Information Technology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Anjali Kapoor', 'dr..anjali.kapoor@institute.ac.in', 'National Institute of Technology', 'India', 'Information Technology', NULL, 'Information Technology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 413, 0, 'articles/sample2.pdf', NULL, 1, 'draft', '2025-03-14', 0, NULL, NULL, NULL, NULL, '2025-03-06 00:04:52', '2025-03-10 00:04:52'),
(73, 'Case Study: Information Technology', 'This is a research paper about Information Technology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Amit Sharma', 'dr..amit.sharma@university.edu', 'Indian Institute of Technology, Delhi', 'UK', 'Information Technology', NULL, 'Information Technology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 429, 0, 'articles/sample4.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-01-25 00:04:52', '2025-03-31 00:04:52'),
(74, 'Perspectives on Clinical Psychology', 'This is a research paper about Clinical Psychology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Vikram Mehta', 'dr..vikram.mehta@research.org', 'National Institute of Technology', 'China', 'Clinical Psychology', NULL, 'Clinical Psychology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 227, 0, 'articles/sample4.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-08 00:04:52', '2025-03-19 00:04:52'),
(75, 'New Insights into Criminology', 'This is a research paper about Criminology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Priya Singh', 'dr..priya.singh@institute.ac.in', 'All India Institute of Medical Sciences', 'UK', 'Criminology', NULL, 'Criminology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 383, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-08 00:04:52', '2025-03-27 00:04:52'),
(76, 'Survey of Statistics', 'This is a research paper about Statistics. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Prakash Rao', 'dr..prakash.rao@gmail.com', 'Indian Institute of Technology, Delhi', 'Canada', 'Statistics', NULL, 'Statistics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 215, 0, 'articles/sample3.pdf', NULL, 1, 'draft', '2025-03-31', 0, NULL, NULL, NULL, NULL, '2025-01-14 00:04:52', '2025-03-20 00:04:52'),
(77, 'Survey of Robotics', 'This is a research paper about Robotics. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Kiran Reddy', 'dr..kiran.reddy@gmail.com', 'All India Institute of Medical Sciences', 'India', 'Robotics', NULL, 'Robotics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 51, 0, 'articles/sample2.pdf', NULL, 1, 'draft', '2025-04-03', 0, NULL, NULL, NULL, NULL, '2025-03-26 00:04:52', '2025-04-05 10:48:22'),
(78, 'Theoretical Framework for Logic', 'This is a research paper about Logic. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Kavita Desai', 'dr..kavita.desai@institute.ac.in', 'Indian Institute of Science', 'France', 'Logic', NULL, 'Logic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 0, 'articles/sample1.pdf', NULL, 1, 'draft', '2025-03-06', 0, NULL, NULL, NULL, NULL, '2025-03-22 00:04:52', '2025-03-14 00:04:52'),
(79, 'Investigation of Criminology', 'This is a research paper about Criminology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Suresh Iyer', 'dr..suresh.iyer@university.edu', 'University of Mumbai', 'China', 'Criminology', NULL, 'Criminology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 70, 0, 'articles/sample4.pdf', NULL, 1, 'draft', '2025-03-27', 0, NULL, NULL, NULL, NULL, '2025-03-30 00:04:52', '2025-03-18 00:04:52'),
(80, 'Study of Ecology', 'This is a research paper about Ecology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Ananya Sen', 'dr..ananya.sen@research.org', 'University of Delhi', 'Germany', 'Ecology', NULL, 'Ecology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 409, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-01-26 00:04:52', '2025-04-04 00:04:52'),
(81, 'Applications of Law', 'This is a research paper about Law. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Prakash Rao', 'dr..prakash.rao@institute.ac.in', 'Indian Institute of Technology, Delhi', 'Germany', 'Law', NULL, 'Law', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 313, 0, 'articles/sample3.pdf', NULL, 1, 'draft', '2025-03-31', 0, NULL, NULL, NULL, NULL, '2025-02-28 00:04:52', '2025-03-23 00:04:52'),
(82, 'Analysis of Network Engineering', 'This is a research paper about Network Engineering. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Nandini Sharma', 'dr..nandini.sharma@institute.ac.in', 'University of Delhi', 'USA', 'Network Engineering', NULL, 'Network Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 241, 0, 'articles/sample4.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-16 00:04:52', '2025-03-27 00:04:52'),
(83, 'Perspectives on Architecture', 'This is a research paper about Architecture. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Priya Singh', 'dr..priya.singh@institute.ac.in', 'Indian Institute of Science', 'France', 'Architecture', NULL, 'Architecture', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 253, 0, 'articles/sample4.pdf', NULL, 1, 'draft', '2025-03-30', 0, NULL, NULL, NULL, NULL, '2025-04-03 00:04:52', '2025-03-24 00:04:52'),
(84, 'Developments in Cognitive Science', 'This is a research paper about Cognitive Science. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Rahul Gupta', 'dr..rahul.gupta@gmail.com', 'Banaras Hindu University', 'UK', 'Cognitive Science', NULL, 'Cognitive Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, 0, 'articles/sample5.pdf', NULL, 1, 'draft', '2025-03-09', 0, NULL, NULL, NULL, NULL, '2025-03-07 00:04:52', '2025-03-13 00:04:52'),
(85, 'Survey of Chemical Engineering', 'This is a research paper about Chemical Engineering. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Mohammed Khan', 'dr..mohammed.khan@gmail.com', 'Punjab University', 'Germany', 'Chemical Engineering', NULL, 'Chemical Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 388, 0, 'articles/sample2.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-02 00:04:52', '2025-03-11 00:04:52');
INSERT INTO `articles` (`id`, `title`, `abstract`, `content`, `references`, `author_contributor_list`, `author_name`, `email`, `affiliation`, `country`, `keywords`, `pages`, `category`, `volume`, `issue`, `doi`, `pdf_file`, `html_file`, `docx_file`, `html_content`, `page_no`, `views`, `likes`, `manuscript_path`, `cover_letter_path`, `is_published`, `status`, `published_date`, `has_permissions`, `license_url`, `copyright_holder`, `copyright_year`, `featured_image`, `created_at`, `updated_at`) VALUES
(86, 'Novel Approach to Law', 'This is a research paper about Law. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Ananya Sen', 'dr..ananya.sen@gmail.com', 'University of Calcutta', 'UK', 'Law', NULL, 'Law', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 160, 0, 'articles/sample2.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-31 00:04:52', '2025-03-19 00:04:52'),
(87, 'Perspectives on Gender Studies', 'This is a research paper about Gender Studies. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Sameer Joshi', 'dr..sameer.joshi@institute.ac.in', 'Jawaharlal Nehru University', 'China', 'Gender Studies', NULL, 'Gender Studies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 67, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-16 00:04:52', '2025-03-19 00:04:52'),
(88, 'Case Study: Oceanography', 'This is a research paper about Oceanography. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Vikram Mehta', 'dr..vikram.mehta@institute.ac.in', 'Tata Institute of Fundamental Research', 'UK', 'Oceanography', NULL, 'Oceanography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 141, 0, 'articles/sample2.pdf', NULL, 1, 'draft', '2025-03-29', 0, NULL, NULL, NULL, NULL, '2025-03-03 00:04:52', '2025-03-19 00:04:52'),
(89, 'Critical Review of International Relations', 'This is a research paper about International Relations. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Mohammed Khan', 'dr..mohammed.khan@institute.ac.in', 'Indian Institute of Science', 'France', 'International Relations', NULL, 'International Relations', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 244, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-01-21 00:04:52', '2025-03-17 00:04:52'),
(90, 'Theoretical Framework for Strategic Management', 'This is a research paper about Strategic Management. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Nandini Sharma', 'dr..nandini.sharma@gmail.com', 'Jawaharlal Nehru University', 'Canada', 'Strategic Management', NULL, 'Strategic Management', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 137, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-01-24 00:04:52', '2025-03-16 00:04:52'),
(91, 'Investigation of Earth Science', 'This is a research paper about Earth Science. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Priya Singh', 'dr..priya.singh@research.org', 'University of Delhi', 'Australia', 'Earth Science', NULL, 'Earth Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 62, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-18 00:04:52', '2025-03-27 00:04:52'),
(92, 'Analysis of International Relations', 'This is a research paper about International Relations. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Arjun Saxena', 'dr..arjun.saxena@university.edu', 'Jawaharlal Nehru University', 'Germany', 'International Relations', NULL, 'International Relations', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 264, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-14 00:04:52', '2025-03-09 00:04:52'),
(93, 'Applications of Digital Marketing', 'This is a research paper about Digital Marketing. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Rahul Gupta', 'dr..rahul.gupta@gmail.com', 'University of Mumbai', 'Canada', 'Digital Marketing', NULL, 'Digital Marketing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 42, 0, 'articles/sample1.pdf', NULL, 1, 'draft', '2025-03-14', 0, NULL, NULL, NULL, NULL, '2025-02-26 00:04:52', '2025-03-28 00:04:52'),
(94, 'Investigation of Clinical Psychology', 'This is a research paper about Clinical Psychology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Amit Sharma', 'dr..amit.sharma@gmail.com', 'University of Calcutta', 'Canada', 'Clinical Psychology', NULL, 'Clinical Psychology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 470, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-13 00:04:52', '2025-03-16 00:04:52'),
(95, 'Investigation of Medical Science', 'This is a research paper about Medical Science. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Mohammed Khan', 'dr..mohammed.khan@university.edu', 'University of Calcutta', 'UK', 'Medical Science', NULL, 'Medical Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 260, 0, 'articles/sample4.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-01-10 00:04:52', '2025-04-03 00:04:52'),
(96, 'Survey of Gender Studies', 'This is a research paper about Gender Studies. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Sunita Patel', 'dr..sunita.patel@university.edu', 'Punjab University', 'Australia', 'Gender Studies', NULL, 'Gender Studies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 53, 0, 'articles/sample3.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-03-09 00:04:52', '2025-03-07 00:04:52'),
(97, 'Survey of Entrepreneurship', 'This is a research paper about Entrepreneurship. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Neha Verma', 'dr..neha.verma@university.edu', 'Indian Institute of Technology, Delhi', 'France', 'Entrepreneurship', NULL, 'Entrepreneurship', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 85, 0, 'articles/sample1.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-21 00:04:52', '2025-03-29 00:04:52'),
(98, 'Analysis of Behavioral Economics', 'This is a research paper about Behavioral Economics. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Meera Banerjee', 'dr..meera.banerjee@institute.ac.in', 'University of Mumbai', 'UK', 'Behavioral Economics', NULL, 'Behavioral Economics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 116, 0, 'articles/sample4.pdf', NULL, 1, 'draft', '2025-03-26', 0, NULL, NULL, NULL, NULL, '2025-02-26 00:04:52', '2025-03-28 00:04:52'),
(99, 'Applications of Environmental Science', 'This is a research paper about Environmental Science. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Priya Singh', 'dr..priya.singh@gmail.com', 'Jawaharlal Nehru University', 'UK', 'Environmental Science', NULL, 'Environmental Science', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 311, 0, 'articles/sample1.pdf', NULL, 1, 'draft', '2025-03-16', 0, NULL, NULL, NULL, NULL, '2025-02-25 00:04:52', '2025-04-04 00:04:52'),
(100, 'Case Study: Chemistry', 'This is a research paper about Chemistry. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Vikram Mehta', 'dr..vikram.mehta@gmail.com', 'University of Mumbai', 'France', 'Chemistry', NULL, 'Chemistry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 384, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-02-02 00:04:52', '2025-03-23 00:04:52'),
(101, 'Perspectives on Electrical Engineering', 'This is a research paper about Electrical Engineering. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Amit Sharma', 'dr..amit.sharma@institute.ac.in', 'University of Delhi', 'China', 'Electrical Engineering', NULL, 'Electrical Engineering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 102, 0, 'articles/sample5.pdf', NULL, 1, 'draft', '2025-03-24', 0, NULL, NULL, NULL, NULL, '2025-03-23 00:04:52', '2025-04-03 00:04:52'),
(102, 'Case Study: Archaeology', 'This is a research paper about Archaeology. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Meera Banerjee', 'dr..meera.banerjee@institute.ac.in', 'National Institute of Technology', 'India', 'Archaeology', NULL, 'Archaeology', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 157, 0, 'articles/sample5.pdf', NULL, 0, 'draft', NULL, 0, NULL, NULL, NULL, NULL, '2025-01-24 00:04:52', '2025-03-10 00:04:52'),
(103, 'Critical Review of Cultural Studies', 'This is a research paper about Cultural Studies. It explores various aspects and applications in this field.', NULL, NULL, NULL, 'Dr. Rahul Gupta', 'dr..rahul.gupta@university.edu', 'Banaras Hindu University', 'Australia', 'Cultural Studies', NULL, 'Cultural Studies', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 80, 0, 'articles/sample2.pdf', NULL, 1, 'draft', '2025-03-19', 0, NULL, NULL, NULL, NULL, '2025-03-17 00:04:52', '2025-03-16 00:04:52'),
(104, 'test', '<p><label class=\"form-label\" for=\"abstract\">Article Abstract&nbsp;<span class=\"text-danger\">*</span></label></p>\r\n<div class=\"tox tox-tinymce\" style=\"visibility: hidden; height: 171px;\" role=\"application\" aria-disabled=\"false\">\r\n<div class=\"tox-editor-container\">\r\n<div class=\"tox-editor-header\" data-alloy-vertical-dir=\"toptobottom\">\r\n<div class=\"tox-menubar\" role=\"menubar\" data-alloy-tabstop=\"true\"><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">File</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Edit</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">View</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Insert</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Format</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Tools</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Table</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Help</span></button></div>\r\n<div class=\"tox-toolbar-overlord\" role=\"group\" aria-disabled=\"false\">\r\n<div class=\"tox-toolbar__primary\" role=\"group\">\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\"><button class=\"tox-tbtn\" tabindex=\"-1\" title=\"Bold\" type=\"button\" aria-label=\"Bold\" aria-disabled=\"false\" aria-pressed=\"false\"></button><button class=\"tox-tbtn\" tabindex=\"-1\" title=\"Italic\" type=\"button\" aria-label=\"Italic\" aria-disabled=\"false\" aria-pressed=\"false\"></button>\r\n<div class=\"tox-split-button\" tabindex=\"-1\" title=\"Background color Black\" role=\"button\" aria-pressed=\"false\" aria-label=\"Background color Black\" aria-haspopup=\"true\" aria-disabled=\"false\" aria-expanded=\"false\" aria-describedby=\"aria_2235496332301744083166693\">&nbsp;</div>\r\n</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"tox-anchorbar\">&nbsp;</div>\r\n</div>\r\n<div class=\"tox-sidebar-wrap\">&nbsp;</div>\r\n</div>\r\n</div>', NULL, '<p><label class=\"form-label\" for=\"references\">Article References</label></p>\r\n<div class=\"tox tox-tinymce\" style=\"visibility: hidden; height: 171px;\" role=\"application\" aria-disabled=\"false\">\r\n<div class=\"tox-editor-container\">\r\n<div class=\"tox-editor-header\" data-alloy-vertical-dir=\"toptobottom\">\r\n<div class=\"tox-menubar\" role=\"menubar\" data-alloy-tabstop=\"true\"><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">File</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Edit</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">View</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Insert</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Format</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Tools</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Table</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Help</span></button></div>\r\n<div class=\"tox-toolbar-overlord\" role=\"group\" aria-disabled=\"false\">\r\n<div class=\"tox-toolbar__primary\" role=\"group\">\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\"><button class=\"tox-tbtn\" tabindex=\"-1\" title=\"Bold\" type=\"button\" aria-label=\"Bold\" aria-disabled=\"false\" aria-pressed=\"false\"></button><button class=\"tox-tbtn\" tabindex=\"-1\" title=\"Italic\" type=\"button\" aria-label=\"Italic\" aria-disabled=\"false\" aria-pressed=\"false\"></button>\r\n<div class=\"tox-split-button\" tabindex=\"-1\" title=\"Background color Black\" role=\"button\" aria-pressed=\"false\" aria-label=\"Background color Black\" aria-haspopup=\"true\" aria-disabled=\"false\" aria-expanded=\"false\" aria-describedby=\"aria_2234002773171744083166830\">&nbsp;</div>\r\n</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"tox-anchorbar\">&nbsp;</div>\r\n</div>\r\n<div class=\"tox-sidebar-wrap\">&nbsp;</div>\r\n</div>\r\n</div>', '<p><label class=\"form-label\" for=\"references\">Article References</label></p>\r\n<div class=\"tox tox-tinymce\" style=\"visibility: hidden; height: 171px;\" role=\"application\" aria-disabled=\"false\">\r\n<div class=\"tox-editor-container\">\r\n<div class=\"tox-editor-header\" data-alloy-vertical-dir=\"toptobottom\">\r\n<div class=\"tox-menubar\" role=\"menubar\" data-alloy-tabstop=\"true\"><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">File</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Edit</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">View</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Insert</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Format</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Tools</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Table</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Help</span></button></div>\r\n<div class=\"tox-toolbar-overlord\" role=\"group\" aria-disabled=\"false\">\r\n<div class=\"tox-toolbar__primary\" role=\"group\">\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\"><button class=\"tox-tbtn\" tabindex=\"-1\" title=\"Bold\" type=\"button\" aria-label=\"Bold\" aria-disabled=\"false\" aria-pressed=\"false\"></button><button class=\"tox-tbtn\" tabindex=\"-1\" title=\"Italic\" type=\"button\" aria-label=\"Italic\" aria-disabled=\"false\" aria-pressed=\"false\"></button>\r\n<div class=\"tox-split-button\" tabindex=\"-1\" title=\"Background color Black\" role=\"button\" aria-pressed=\"false\" aria-label=\"Background color Black\" aria-haspopup=\"true\" aria-disabled=\"false\" aria-expanded=\"false\" aria-describedby=\"aria_2234002773171744083166830\">&nbsp;</div>\r\n</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"tox-anchorbar\">&nbsp;</div>\r\n</div>\r\n<div class=\"tox-sidebar-wrap\">&nbsp;</div>\r\n</div>\r\n</div>', 'test', 'banarsiamin@gmail.com', 'asas', 'india', 'Subaltern climate change adaptation, Subnational border-community, Inter-local adaptation governance, Inter-institutional transborder synergy, Strategic resiliency.', '123-123', 'Case Study', NULL, NULL, 'https://doi.org/10.55677/ijssers/V05I04Y2025-01', 'articles/pdf/6cIXVNJ37LGGWqWCmmQf8HN1Cx8wxxHhXA7K8qiB.pdf', NULL, NULL, '<p><label class=\"form-label\" for=\"html_content\">HTML Format Content</label></p>\r\n<div class=\"tox tox-tinymce\" style=\"visibility: hidden; height: 358px;\" role=\"application\" aria-disabled=\"false\">\r\n<div class=\"tox-editor-container\">\r\n<div class=\"tox-editor-header\" data-alloy-vertical-dir=\"toptobottom\">\r\n<div class=\"tox-menubar\" role=\"menubar\" data-alloy-tabstop=\"true\"><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">File</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Edit</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">View</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Insert</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Format</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Tools</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Table</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Help</span></button></div>\r\n<div class=\"tox-toolbar-overlord\" role=\"group\" aria-disabled=\"false\">\r\n<div class=\"tox-toolbar__primary\" role=\"group\">\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\"><button class=\"tox-tbtn\" tabindex=\"-1\" title=\"Bold\" type=\"button\" aria-label=\"Bold\" aria-disabled=\"false\" aria-pressed=\"false\"></button><button class=\"tox-tbtn\" tabindex=\"-1\" title=\"Italic\" type=\"button\" aria-label=\"Italic\" aria-disabled=\"false\" aria-pressed=\"false\"></button>\r\n<div class=\"tox-split-button\" tabindex=\"-1\" title=\"Background color Black\" role=\"button\" aria-pressed=\"false\" aria-label=\"Background color Black\" aria-haspopup=\"true\" aria-disabled=\"false\" aria-expanded=\"false\" aria-describedby=\"aria_2686556944911744083167066\">&nbsp;</div>\r\n</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"tox-anchorbar\">&nbsp;</div>\r\n</div>\r\n<div class=\"tox-sidebar-wrap\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"tox tox-tinymce\" style=\"visibility: hidden; height: 171px;\" role=\"application\" aria-disabled=\"false\">\r\n<div class=\"tox-editor-container\">\r\n<div class=\"tox-editor-header\" data-alloy-vertical-dir=\"toptobottom\">\r\n<div class=\"tox-menubar\" role=\"menubar\" data-alloy-tabstop=\"true\"><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">File</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Edit</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">View</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Insert</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Format</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Tools</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Table</span></button><button class=\"tox-mbtn tox-mbtn--select\" tabindex=\"-1\" role=\"menuitem\" type=\"button\" aria-haspopup=\"true\" data-alloy-tabstop=\"true\" aria-expanded=\"false\"><span class=\"tox-mbtn__select-label\">Help</span></button></div>\r\n<div class=\"tox-toolbar-overlord\" role=\"group\" aria-disabled=\"false\">\r\n<div class=\"tox-toolbar__primary\" role=\"group\">\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\"><button class=\"tox-tbtn\" tabindex=\"-1\" title=\"Bold\" type=\"button\" aria-label=\"Bold\" aria-disabled=\"false\" aria-pressed=\"false\"></button><button class=\"tox-tbtn\" tabindex=\"-1\" title=\"Italic\" type=\"button\" aria-label=\"Italic\" aria-disabled=\"false\" aria-pressed=\"false\"></button>\r\n<div class=\"tox-split-button\" tabindex=\"-1\" title=\"Background color Black\" role=\"button\" aria-pressed=\"false\" aria-label=\"Background color Black\" aria-haspopup=\"true\" aria-disabled=\"false\" aria-expanded=\"false\" aria-describedby=\"aria_2234002773171744083166830\">&nbsp;</div>\r\n</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" title=\"\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n<div class=\"tox-toolbar__group\" tabindex=\"-1\" role=\"toolbar\" data-alloy-tabstop=\"true\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"tox-anchorbar\">&nbsp;</div>\r\n</div>\r\n<div class=\"tox-sidebar-wrap\">&nbsp;</div>\r\n</div>\r\n</div>', NULL, 11, 0, 'articles/pdf/6cIXVNJ37LGGWqWCmmQf8HN1Cx8wxxHhXA7K8qiB.pdf', NULL, 1, 'published', '2025-04-12', 1, 'https://creativecommons.org/licenses/by/4.0/', 'Dascil, Rommel Meneses', 2025, 'articles/images/6Sq1vFpCgIHK3QL9V0Uv71JAJy68tAwaWoILLndJ.png', '2025-04-07 22:04:27', '2025-04-07 23:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `article_issue`
--

CREATE TABLE `article_issue` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `issue_id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_issue`
--

INSERT INTO `article_issue` (`id`, `article_id`, `issue_id`, `order`, `created_at`, `updated_at`) VALUES
(71, 13, 14, 0, '2025-04-06 08:53:49', '2025-04-06 08:53:49'),
(73, 104, 14, 0, '2025-04-07 22:04:27', '2025-04-07 22:04:27'),
(74, 3, 14, 0, '2025-04-08 02:26:29', '2025-04-08 02:26:30'),
(75, 2, 14, 0, '2025-04-08 02:26:47', '2025-04-08 02:26:47'),
(76, 1, 14, 0, '2025-04-08 02:27:04', '2025-04-08 02:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `article_views`
--

CREATE TABLE `article_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` text DEFAULT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_views`
--

INSERT INTO `article_views` (`id`, `article_id`, `ip_address`, `user_agent`, `viewed_at`, `created_at`, `updated_at`) VALUES
(1, 104, '127.0.0.2', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2025-04-08 04:41:23', '2025-04-07 23:09:50', '2025-04-07 23:09:50'),
(2, 3, '127.0.0.2', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2025-04-08 04:41:29', '2025-04-07 23:11:01', '2025-04-07 23:11:01'),
(3, 104, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2025-04-07 23:11:34', '2025-04-07 23:11:34', '2025-04-07 23:11:34'),
(4, 3, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2025-04-07 23:11:38', '2025-04-07 23:11:38', '2025-04-07 23:11:38'),
(5, 13, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2025-04-08 00:12:59', '2025-04-08 00:12:59', '2025-04-08 00:12:59'),
(6, 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2025-04-08 00:18:08', '2025-04-08 00:18:08', '2025-04-08 00:18:08'),
(7, 59, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2025-04-08 00:22:14', '2025-04-08 00:22:14', '2025-04-08 00:22:14'),
(8, 37, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2025-04-08 00:22:28', '2025-04-08 00:22:28', '2025-04-08 00:22:28'),
(9, 38, '2409:40c4:1178:233a:7de4:f787:c7da:3c84', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2025-04-08 08:25:18', '2025-04-08 08:25:18', '2025-04-08 08:25:18'),
(10, 38, '2409:40c4:27b:f6ba:183a:8cef:cc6b:34f', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2025-04-08 08:28:27', '2025-04-08 08:28:27', '2025-04-08 08:28:27'),
(11, 70, '2409:40c4:27b:f6ba:183a:8cef:cc6b:34f', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2025-04-08 08:29:07', '2025-04-08 08:29:07', '2025-04-08 08:29:07'),
(12, 1, '2409:40c4:27b:f6ba:183a:8cef:cc6b:34f', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', '2025-04-08 08:29:14', '2025-04-08 08:29:14', '2025-04-08 08:29:14'),
(13, 1, '2409:40c4:11c7:181d:352f:7e71:e593:ce10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', '2025-04-10 03:25:18', '2025-04-10 03:25:18', '2025-04-10 03:25:18'),
(14, 3, '2409:40c4:11c7:181d:352f:7e71:e593:ce10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', '2025-04-10 03:25:36', '2025-04-10 03:25:36', '2025-04-10 03:25:36'),
(15, 1, '2409:40c4:11c7:181d:b591:934b:1cd2:b1fe', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', '2025-04-10 03:45:04', '2025-04-10 03:45:04', '2025-04-10 03:45:04'),
(16, 1, '2409:40c4:11c1:49e4:647f:17f8:c56c:e134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', '2025-04-10 14:03:01', '2025-04-10 14:03:01', '2025-04-10 14:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('setting_current_issue_id', 's:2:\"14\";', 2059459090),
('setting_editorial_policies', 'N;', 2060170561),
('setting_journal_description', 'N;', 2060170561),
('setting_open_access_policy', 'N;', 2060170561);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `phone`, `organization`, `country`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'Amin', 'banarsiamin@gmail.com', 'amin', 'dfds', '977053404', 'ayatinfotech', 'India', 0, '2025-04-08 00:42:05', '2025-04-08 00:42:05'),
(2, 'Web Expert', 'aminntier@gmail.com', 'amin', 'dsfsdfsd', '09770534045', 'ayatinfotech', 'India', 0, '2025-04-08 08:31:05', '2025-04-08 08:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `editorial_boards`
--

CREATE TABLE `editorial_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `website` text DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `address_line2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state_province_region` varchar(255) DEFAULT NULL,
  `zip_postal_code` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `area_of_specialization` varchar(255) DEFAULT NULL,
  `brief_resume` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editorial_boards`
--

INSERT INTO `editorial_boards` (`id`, `first_name`, `last_name`, `email`, `phone`, `website`, `street_address`, `address_line2`, `city`, `state_province_region`, `zip_postal_code`, `country`, `area_of_specialization`, `brief_resume`, `description`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'David', 'Anderson', 'david.anderson@university-of-michigan.edu', '+20 257 119 2733', 'www.university-of-michigan.edu/~anderson', '246 Elm Lane', NULL, 'Seattle', 'Ontario', '45823', 'Australia', 'Network Security', NULL, '<p>Prof. David Anderson is a distinguished researcher and educator in the field of Network Security at University of Michigan. With over 24 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include distributed systems, computer architecture, and internet of things.</p><p>Prof. Anderson holds a Ph.D. from University of Cambridge and has been recognized with several awards including the Pioneer in Technology Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(2, 'Sarah', 'Anderson', 'sarah.anderson@university-of-tokyo.edu', '+37 552 483 7502', 'www.university-of-tokyo.edu/~anderson', '761 Park Court', NULL, 'New York', 'New South Wales', '90026', 'Russia', 'Mobile Computing', NULL, '<p>Prof. Sarah Anderson is a distinguished researcher and educator in the field of Mobile Computing at University of Tokyo. With over 29 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include human-computer interaction, blockchain, and human-computer interaction.</p><p>Prof. Anderson holds a Ph.D. from Johns Hopkins University and has been recognized with several awards including the Distinguished Researcher Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(3, 'Richard', 'Thompson', 'richard.thompson@princeton-university.edu', '+99 470 710 5031', 'www.princeton-university.edu/~thompson', '286 Pine Way', NULL, 'Singapore', 'Texas', '48161', 'Sweden', 'Distributed Systems', NULL, '<p>Prof. Richard Thompson is a distinguished researcher and educator in the field of Distributed Systems at Princeton University. With over 19 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include database systems, data science, and cybersecurity.</p><p>Prof. Thompson holds a Ph.D. from University of Michigan and has been recognized with several awards including the Pioneer in Technology Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(4, 'Nancy', 'Wilson', 'nancy.wilson@university-of-edinburgh.edu', '+76 315 927 5926', 'www.university-of-edinburgh.edu/~wilson', '65 Research Court', NULL, 'Berlin', 'Stockholm County', '36711', 'Netherlands', 'Computer Architecture', NULL, '<p>Prof. Nancy Wilson is a distinguished researcher and educator in the field of Computer Architecture at University of Edinburgh. With over 14 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include neural networks, data science, and neural networks.</p><p>Prof. Wilson holds a Ph.D. from Johns Hopkins University and has been recognized with several awards including the Outstanding Contribution to Science Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(5, 'Michael', 'Robinson', 'michael.robinson@cornell-university.edu', '+58 590 411 7385', 'www.cornell-university.edu/~robinson', '210 University Road', NULL, 'San Francisco', 'Maharashtra', '98006', 'Israel', 'Internet of Things', NULL, '<p>Prof. Michael Robinson is a distinguished researcher and educator in the field of Internet of Things at Cornell University. With over 8 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include machine learning, computational biology, and natural language processing.</p><p>Prof. Robinson holds a Ph.D. from Yale University and has been recognized with several awards including the Innovation in Teaching Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(6, 'Patricia', 'Anderson', 'patricia.anderson@eth-zurich.edu', '+59 873 109 8528', 'www.eth-zurich.edu/~anderson', '413 Cedar Plaza', NULL, 'Los Angeles', 'Madrid Community', '79107', 'Canada', 'Database Systems', NULL, '<p>Prof. Patricia Anderson is a distinguished researcher and educator in the field of Database Systems at ETH Zurich. With over 21 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include information retrieval, information retrieval, and quantum computing.</p><p>Prof. Anderson holds a Ph.D. from California Institute of Technology and has been recognized with several awards including the Pioneer in Technology Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(7, 'Richard', 'Taylor', 'richard.taylor@mit.edu', '+98 822 836 4024', 'www.mit.edu/~taylor', '350 Research Plaza', NULL, 'Chicago', 'North Holland', '11078', 'India', 'Computer Architecture', NULL, '<p>Prof. Richard Taylor is a distinguished researcher and educator in the field of Computer Architecture at MIT. With over 27 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include software engineering, cybersecurity, and neural networks.</p><p>Prof. Taylor holds a Ph.D. from Cornell University and has been recognized with several awards including the Distinguished Researcher Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(8, 'Patricia', 'Thompson', 'patricia.thompson@imperial-college-london.edu', '+32 438 791 8954', 'www.imperial-college-london.edu/~thompson', '979 Oak Plaza', NULL, 'Stockholm', 'Washington', '97703', 'Japan', 'Internet of Things', NULL, '<p>Prof. Patricia Thompson is a distinguished researcher and educator in the field of Internet of Things at Imperial College London. With over 30 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include database systems, data science, and software engineering.</p><p>Prof. Thompson holds a Ph.D. from Peking University and has been recognized with several awards including the Pioneer in Technology Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(9, 'Linda', 'Johnson', 'linda.johnson@university-of-oxford.edu', '+10 953 113 1925', 'www.university-of-oxford.edu/~johnson', '244 University Court', NULL, 'São Paulo', 'Madrid Community', '71376', 'Japan', 'Computational Biology', NULL, '<p>Prof. Linda Johnson is a distinguished researcher and educator in the field of Computational Biology at University of Oxford. With over 16 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include quantum computing, information retrieval, and mobile computing.</p><p>Prof. Johnson holds a Ph.D. from Peking University and has been recognized with several awards including the Outstanding Contribution to Science Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(10, 'Robert', 'Jackson', 'robert.jackson@eth-zurich.edu', '+26 597 604 5280', 'www.eth-zurich.edu/~jackson', '584 Park Road', NULL, 'Oslo', 'Greater London', '75568', 'United Kingdom', 'Robotics', NULL, '<p>Prof. Robert Jackson is a distinguished researcher and educator in the field of Robotics at ETH Zurich. With over 14 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include robotics, distributed systems, and computer graphics.</p><p>Prof. Jackson holds a Ph.D. from University of Oxford and has been recognized with several awards including the Pioneer in Technology Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(11, 'Patricia', 'Harris', 'patricia.harris@johns-hopkins-university.edu', '+71 894 905 7664', 'www.johns-hopkins-university.edu/~harris', '796 Cedar Drive', NULL, 'Los Angeles', 'Stockholm County', '44512', 'Netherlands', 'Bioinformatics', NULL, '<p>Prof. Patricia Harris is a distinguished researcher and educator in the field of Bioinformatics at Johns Hopkins University. With over 27 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include distributed systems, cloud computing, and natural language processing.</p><p>Prof. Harris holds a Ph.D. from University of Michigan and has been recognized with several awards including the Pioneer in Technology Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(12, 'Elizabeth', 'Brown', 'elizabeth.brown@imperial-college-london.edu', '+15 243 366 2145', 'www.imperial-college-london.edu/~brown', '14 Main Way', NULL, 'Paris', 'Bavaria', '52053', 'Israel', 'Natural Language Processing', NULL, '<p>Prof. Elizabeth Brown is a distinguished researcher and educator in the field of Natural Language Processing at Imperial College London. With over 28 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include cloud computing, human-computer interaction, and data science.</p><p>Prof. Brown holds a Ph.D. from University of Cambridge and has been recognized with several awards including the Academic Excellence Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(13, 'Charles', 'Martinez', 'charles.martinez@tsinghua-university.edu', '+58 476 274 8205', 'www.tsinghua-university.edu/~martinez', '922 Park Street', NULL, 'Zurich', 'Illinois', '41694', 'Germany', 'Bioinformatics', NULL, '<p>Prof. Charles Martinez is a distinguished researcher and educator in the field of Bioinformatics at Tsinghua University. With over 26 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include internet of things, information retrieval, and computer graphics.</p><p>Prof. Martinez holds a Ph.D. from University of Toronto and has been recognized with several awards including the Distinguished Researcher Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(14, 'Charles', 'White', 'charles.white@eth-zurich.edu', '+27 686 297 3702', 'www.eth-zurich.edu/~white', '595 Cedar Road', NULL, 'Beijing', 'Washington', '21314', 'Canada', 'Machine Learning', NULL, '<p>Prof. Charles White is a distinguished researcher and educator in the field of Machine Learning at ETH Zurich. With over 25 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include big data analytics, computer vision, and computational biology.</p><p>Prof. White holds a Ph.D. from Harvard University and has been recognized with several awards including the Innovation in Teaching Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(15, 'James', 'Jackson', 'james.jackson@university-of-pennsylvania.edu', '+33 165 209 5709', 'www.university-of-pennsylvania.edu/~jackson', '372 Elm Plaza', NULL, 'Seattle', 'Bavaria', '21641', 'Sweden', 'Machine Learning', NULL, '<p>Prof. James Jackson is a distinguished researcher and educator in the field of Machine Learning at University of Pennsylvania. With over 19 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include cybersecurity, computational biology, and computer graphics.</p><p>Prof. Jackson holds a Ph.D. from ETH Zurich and has been recognized with several awards including the Pioneer in Technology Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(16, 'Richard', 'Harris', 'richard.harris@tsinghua-university.edu', '+52 883 189 7987', 'www.tsinghua-university.edu/~harris', '643 Cedar Boulevard', NULL, 'Paris', 'Lazio', '51368', 'Australia', 'Cybersecurity', NULL, '<p>Prof. Richard Harris is a distinguished researcher and educator in the field of Cybersecurity at Tsinghua University. With over 15 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include database systems, computer vision, and artificial intelligence.</p><p>Prof. Harris holds a Ph.D. from Peking University and has been recognized with several awards including the Pioneer in Technology Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(17, 'John', 'Jackson', 'john.jackson@harvard-university.edu', '+73 838 515 6472', 'www.harvard-university.edu/~jackson', '330 Cedar Boulevard', NULL, 'Rome', 'California', '55425', 'Japan', 'Cybersecurity', NULL, '<p>Prof. John Jackson is a distinguished researcher and educator in the field of Cybersecurity at Harvard University. With over 22 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include computational biology, robotics, and mobile computing.</p><p>Prof. Jackson holds a Ph.D. from University of Tokyo and has been recognized with several awards including the Academic Excellence Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(18, 'Nancy', 'Thompson', 'nancy.thompson@peking-university.edu', '+22 716 423 4585', 'www.peking-university.edu/~thompson', '550 Cedar Terrace', NULL, 'Chicago', 'California', '25821', 'South Korea', 'Bioinformatics', NULL, '<p>Prof. Nancy Thompson is a distinguished researcher and educator in the field of Bioinformatics at Peking University. With over 16 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include mobile computing, blockchain, and artificial intelligence.</p><p>Prof. Thompson holds a Ph.D. from Tsinghua University and has been recognized with several awards including the Distinguished Researcher Award.</p>', NULL, 'approved', '2025-04-04 23:41:14', '2025-04-04 23:41:14'),
(19, 'Richard', 'Robinson', 'richard.robinson@peking-university.edu', '+93 223 220 5408', 'www.peking-university.edu/~robinson', '118 University Road', NULL, 'Stockholm', 'Lazio', '57329', 'United States', 'Software Engineering', NULL, '<p>Prof. Richard Robinson is a distinguished researcher and educator in the field of Software Engineering at Peking University. With over 13 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include computer graphics, cloud computing, and robotics.</p><p>Prof. Robinson holds a Ph.D. from University of Michigan and has been recognized with several awards including the Innovation in Teaching Award.</p>', NULL, 'approved', '2025-04-04 23:41:15', '2025-04-04 23:41:15'),
(20, 'Susan', 'Miller', 'susan.miller@yale-university.edu', '+95 332 937 7567', 'www.yale-university.edu/~miller', '889 University Terrace', NULL, 'Los Angeles', 'Tokyo Prefecture', '58195', 'Sweden', 'Computer Graphics', NULL, '<p>Prof. Susan Miller is a distinguished researcher and educator in the field of Computer Graphics at Yale University. With over 15 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include computer vision, information retrieval, and robotics.</p><p>Prof. Miller holds a Ph.D. from California Institute of Technology and has been recognized with several awards including the Academic Excellence Award.</p>', NULL, 'approved', '2025-04-04 23:41:15', '2025-04-04 23:41:15'),
(21, 'Nancy', 'Moore', 'nancy.moore@harvard-university.edu', '+90 552 495 3563', 'www.harvard-university.edu/~moore', '974 Research Way', NULL, 'Toronto', 'Massachusetts', '18533', 'Singapore', 'Machine Learning', NULL, '<p>Prof. Nancy Moore is a distinguished researcher and educator in the field of Machine Learning at Harvard University. With over 16 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include human-computer interaction, information retrieval, and computer graphics.</p><p>Prof. Moore holds a Ph.D. from University of Washington and has been recognized with several awards including the Academic Excellence Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(22, 'Karen', 'Miller', 'karen.miller@university-of-toronto.edu', '+37 568 105 2054', 'www.university-of-toronto.edu/~miller', '62 Pine Plaza', NULL, 'Berlin', 'Île-de-France', '58237', 'Japan', 'Database Systems', NULL, '<p>Prof. Karen Miller is a distinguished researcher and educator in the field of Database Systems at University of Toronto. With over 28 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include computer vision, natural language processing, and bioinformatics.</p><p>Prof. Miller holds a Ph.D. from Imperial College London and has been recognized with several awards including the Outstanding Contribution to Science Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(23, 'Lisa', 'Davis', 'lisa.davis@university-of-toronto.edu', '+77 629 381 5832', 'www.university-of-toronto.edu/~davis', '434 University Boulevard', NULL, 'Los Angeles', 'Illinois', '92113', 'Canada', 'Artificial Intelligence', NULL, '<p>Prof. Lisa Davis is a distinguished researcher and educator in the field of Artificial Intelligence at University of Toronto. With over 13 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include information retrieval, robotics, and machine learning.</p><p>Prof. Davis holds a Ph.D. from University of Michigan and has been recognized with several awards including the Innovation in Teaching Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(24, 'Lisa', 'Jones', 'lisa.jones@california-institute-of-technology.edu', '+35 807 895 3949', 'www.california-institute-of-technology.edu/~jones', '893 Elm Drive', NULL, 'Berlin', 'Washington', '92017', 'United States', 'Cloud Computing', NULL, '<p>Prof. Lisa Jones is a distinguished researcher and educator in the field of Cloud Computing at California Institute of Technology. With over 9 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include database systems, computer vision, and robotics.</p><p>Prof. Jones holds a Ph.D. from University of Toronto and has been recognized with several awards including the Academic Excellence Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(25, 'Jennifer', 'Garcia', 'jennifer.garcia@university-of-chicago.edu', '+17 910 898 9620', 'www.university-of-chicago.edu/~garcia', '449 Park Terrace', NULL, 'Vienna', 'Zürich', '25769', 'Australia', 'Human-Computer Interaction', NULL, '<p>Prof. Jennifer Garcia is a distinguished researcher and educator in the field of Human-Computer Interaction at University of Chicago. With over 27 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include big data analytics, computer vision, and information retrieval.</p><p>Prof. Garcia holds a Ph.D. from National University of Singapore and has been recognized with several awards including the Academic Excellence Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(26, 'William', 'Davis', 'william.davis@university-of-washington.edu', '+39 774 317 6016', 'www.university-of-washington.edu/~davis', '862 University Boulevard', NULL, 'Cambridge', 'Lazio', '57609', 'Italy', 'Natural Language Processing', NULL, '<p>Prof. William Davis is a distinguished researcher and educator in the field of Natural Language Processing at University of Washington. With over 18 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include computer graphics, cloud computing, and computational biology.</p><p>Prof. Davis holds a Ph.D. from Columbia University and has been recognized with several awards including the Outstanding Contribution to Science Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(27, 'John', 'Garcia', 'john.garcia@university-of-california-los-angeles.edu', '+33 646 456 5362', 'www.university-of-california-los-angeles.edu/~garcia', '430 Main Plaza', NULL, 'Seoul', 'Bavaria', '87505', 'Canada', 'Machine Learning', NULL, '<p>Prof. John Garcia is a distinguished researcher and educator in the field of Machine Learning at University of California, Los Angeles. With over 16 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include mobile computing, cybersecurity, and artificial intelligence.</p><p>Prof. Garcia holds a Ph.D. from University of Cambridge and has been recognized with several awards including the Distinguished Researcher Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(28, 'Charles', 'Jackson', 'charles.jackson@university-of-edinburgh.edu', '+65 741 933 6851', 'www.university-of-edinburgh.edu/~jackson', '568 College Drive', NULL, 'London', 'Illinois', '10839', 'India', 'Software Engineering', NULL, '<p>Prof. Charles Jackson is a distinguished researcher and educator in the field of Software Engineering at University of Edinburgh. With over 12 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include cybersecurity, cloud computing, and computer vision.</p><p>Prof. Jackson holds a Ph.D. from University of Oxford and has been recognized with several awards including the Innovation in Teaching Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(29, 'Thomas', 'Jackson', 'thomas.jackson@johns-hopkins-university.edu', '+60 304 902 7688', 'www.johns-hopkins-university.edu/~jackson', '341 Cedar Court', NULL, 'Cambridge', 'Tokyo Prefecture', '93013', 'Russia', 'Blockchain', NULL, '<p>Prof. Thomas Jackson is a distinguished researcher and educator in the field of Blockchain at Johns Hopkins University. With over 11 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include big data analytics, blockchain, and robotics.</p><p>Prof. Jackson holds a Ph.D. from Peking University and has been recognized with several awards including the Distinguished Researcher Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(30, 'Patricia', 'Brown', 'patricia.brown@stanford-university.edu', '+34 672 295 5082', 'www.stanford-university.edu/~brown', '843 Main Avenue', NULL, 'Cambridge', 'Île-de-France', '25156', 'Switzerland', 'Software Engineering', NULL, '<p>Prof. Patricia Brown is a distinguished researcher and educator in the field of Software Engineering at Stanford University. With over 21 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include computational biology, software engineering, and robotics.</p><p>Prof. Brown holds a Ph.D. from Peking University and has been recognized with several awards including the Innovation in Teaching Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(31, 'Thomas', 'White', 'thomas.white@johns-hopkins-university.edu', '+51 227 552 2206', 'www.johns-hopkins-university.edu/~white', '479 Pine Drive', NULL, 'Sydney', 'Greater London', '85603', 'Sweden', 'Machine Learning', NULL, '<p>Prof. Thomas White is a distinguished researcher and educator in the field of Machine Learning at Johns Hopkins University. With over 11 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include human-computer interaction, blockchain, and computer graphics.</p><p>Prof. White holds a Ph.D. from University of Chicago and has been recognized with several awards including the Distinguished Researcher Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(32, 'Charles', 'Miller', 'charles.miller@columbia-university.edu', '+96 277 344 2956', 'www.columbia-university.edu/~miller', '660 Cedar Boulevard', NULL, 'Vienna', 'California', '26852', 'Israel', 'Computer Graphics', NULL, '<p>Prof. Charles Miller is a distinguished researcher and educator in the field of Computer Graphics at Columbia University. With over 15 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include blockchain, computer graphics, and information retrieval.</p><p>Prof. Miller holds a Ph.D. from MIT and has been recognized with several awards including the Outstanding Contribution to Science Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(33, 'Daniel', 'Jackson', 'daniel.jackson@university-of-washington.edu', '+59 165 590 4675', 'www.university-of-washington.edu/~jackson', '295 Park Terrace', NULL, 'Tokyo', 'Illinois', '85690', 'Norway', 'Quantum Computing', NULL, '<p>Prof. Daniel Jackson is a distinguished researcher and educator in the field of Quantum Computing at University of Washington. With over 17 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include blockchain, internet of things, and neural networks.</p><p>Prof. Jackson holds a Ph.D. from Yale University and has been recognized with several awards including the Pioneer in Technology Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(34, 'Robert', 'Taylor', 'robert.taylor@university-of-cambridge.edu', '+81 887 177 8968', 'www.university-of-cambridge.edu/~taylor', '938 College Street', NULL, 'Toronto', 'Tokyo Prefecture', '51419', 'France', 'Distributed Systems', NULL, '<p>Prof. Robert Taylor is a distinguished researcher and educator in the field of Distributed Systems at University of Cambridge. With over 5 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include robotics, bioinformatics, and bioinformatics.</p><p>Prof. Taylor holds a Ph.D. from University of Pennsylvania and has been recognized with several awards including the Academic Excellence Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(35, 'William', 'Wilson', 'william.wilson@national-university-of-singapore.edu', '+90 401 673 7266', 'www.national-university-of-singapore.edu/~wilson', '565 College Drive', NULL, 'Tel Aviv', 'Tokyo Prefecture', '36841', 'Singapore', 'Database Systems', NULL, '<p>Prof. William Wilson is a distinguished researcher and educator in the field of Database Systems at National University of Singapore. With over 23 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include cloud computing, database systems, and data science.</p><p>Prof. Wilson holds a Ph.D. from University of Pennsylvania and has been recognized with several awards including the Pioneer in Technology Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(36, 'Sarah', 'Harris', 'sarah.harris@university-of-toronto.edu', '+37 632 963 6736', 'www.university-of-toronto.edu/~harris', '56 Elm Drive', NULL, 'Madrid', 'Seoul Capital Area', '45220', 'United Kingdom', 'Computer Vision', NULL, '<p>Prof. Sarah Harris is a distinguished researcher and educator in the field of Computer Vision at University of Toronto. With over 17 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include big data analytics, blockchain, and database systems.</p><p>Prof. Harris holds a Ph.D. from Yale University and has been recognized with several awards including the Academic Excellence Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(37, 'Charles', 'Jones', 'charles.jones@mit.edu', '+47 898 658 4371', 'www.mit.edu/~jones', '316 Pine Way', NULL, 'Moscow', 'Maharashtra', '13531', 'Israel', 'Cybersecurity', NULL, '<p>Prof. Charles Jones is a distinguished researcher and educator in the field of Cybersecurity at MIT. With over 11 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include database systems, information retrieval, and natural language processing.</p><p>Prof. Jones holds a Ph.D. from California Institute of Technology and has been recognized with several awards including the Outstanding Contribution to Science Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(38, 'David', 'Garcia', 'david.garcia@university-of-cambridge.edu', '+49 932 635 7746', 'www.university-of-cambridge.edu/~garcia', '516 Elm Lane', NULL, 'Paris', 'Stockholm County', '14024', 'Switzerland', 'Database Systems', NULL, '<p>Prof. David Garcia is a distinguished researcher and educator in the field of Database Systems at University of Cambridge. With over 13 years of experience, he has made significant contributions to the advancement of knowledge in his field.</p><p>He has published numerous articles in top-tier journals and presented his research at prestigious international conferences. His research interests include computer architecture, mobile computing, and computer vision.</p><p>Prof. Garcia holds a Ph.D. from University of Tokyo and has been recognized with several awards including the Outstanding Contribution to Science Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(39, 'Susan', 'Wilson', 'susan.wilson@university-of-tokyo.edu', '+49 690 387 5218', 'www.university-of-tokyo.edu/~wilson', '719 University Terrace', NULL, 'Berlin', 'California', '69346', 'United States', 'Robotics', NULL, '<p>Prof. Susan Wilson is a distinguished researcher and educator in the field of Robotics at University of Tokyo. With over 29 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include cybersecurity, cloud computing, and neural networks.</p><p>Prof. Wilson holds a Ph.D. from University of Tokyo and has been recognized with several awards including the Distinguished Researcher Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(40, 'Susan', 'Taylor', 'susan.taylor@harvard-university.edu', '+49 591 492 3074', 'www.harvard-university.edu/~taylor', '288 Research Street', NULL, 'Chicago', 'Greater London', '93020', 'Singapore', 'Neural Networks', NULL, '<p>Prof. Susan Taylor is a distinguished researcher and educator in the field of Neural Networks at Harvard University. With over 26 years of experience, she has made significant contributions to the advancement of knowledge in her field.</p><p>She has published numerous articles in top-tier journals and presented her research at prestigious international conferences. Her research interests include mobile computing, mobile computing, and information retrieval.</p><p>Prof. Taylor holds a Ph.D. from Johns Hopkins University and has been recognized with several awards including the Academic Excellence Award.</p>', NULL, 'approved', '2025-04-05 00:03:20', '2025-04-05 00:03:20'),
(41, 'Amin', 'Khan', 'banarsiamin@gmail.com', '9770534045', 'Ayatinfotech', 'Word 15. shifa medical and life care clinic, Satwas road', NULL, 'kannod', 'Madhya Pradesh', '455332', 'India', 'india infotech Sr web developer', 'editorial_board/resumes/T3xgXgD3hMlIxrRITBqjfnUVWyt8hqKbfYygZAib.pdf', 'this is best for ok', 'editorial_board/photos/JgzYf83SP1CUtuR46Qf60mrZ3xIkbwVOXsvWdhc7.jpg', 'rejected', '2025-04-05 00:18:53', '2025-04-05 00:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `abstract` text DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `volume` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `access_status` enum('open_access','subscription') NOT NULL DEFAULT 'open_access',
  `open_access_date` date DEFAULT NULL,
  `show_volume` tinyint(1) NOT NULL DEFAULT 1,
  `show_number` tinyint(1) NOT NULL DEFAULT 1,
  `show_year` tinyint(1) NOT NULL DEFAULT 1,
  `show_access` tinyint(1) NOT NULL DEFAULT 1,
  `show_title` tinyint(1) NOT NULL DEFAULT 1,
  `status` varchar(255) NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `title`, `abstract`, `featured_image`, `order`, `volume`, `number`, `year`, `access_status`, `open_access_date`, `show_volume`, `show_number`, `show_year`, `show_access`, `show_title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Volume 05 Issue 03 March 2025', '<p>Volume 05 Issue 03 March 2025Volume 05 Issue 03 March 2025</p>', NULL, 0, '5', '3', '2025', 'open_access', '2025-04-18', 1, 1, 1, 1, 1, 'published', '2025-04-05 00:56:28', '2025-04-06 07:19:03'),
(3, 'Volume 05 Issue 04 April 2025', NULL, NULL, 0, '5', '4', '2025', 'open_access', '2025-04-06', 1, 1, 1, 1, 1, 'published', '2025-04-06 06:58:16', '2025-04-06 06:58:16'),
(5, 'Volume 05 Issue 03 March 2025', '<p>Volume 05 Issue 03 March 2025</p>', NULL, 0, NULL, NULL, '2025', 'open_access', NULL, 1, 1, 1, 1, 1, 'draft', '2025-04-06 07:20:53', '2025-04-06 07:20:53'),
(6, 'Volume 05 Issue 02 February 2025', NULL, NULL, 0, '5', '1', '2025', 'open_access', NULL, 1, 1, 1, 1, 1, 'draft', '2025-04-06 07:27:38', '2025-04-06 07:27:38'),
(7, 'Volume 05 Issue 01 February 2025', NULL, NULL, 0, '5', '1', '2025', 'open_access', NULL, 1, 1, 1, 1, 1, 'draft', '2025-04-06 07:27:52', '2025-04-06 07:27:52'),
(8, 'Volume 11 Issue 02 February 2025', NULL, NULL, 0, '11', '1', '2025', 'open_access', NULL, 1, 1, 1, 1, 1, 'draft', '2025-04-06 07:28:05', '2025-04-06 07:28:05'),
(9, 'Volume 12 Issue 02 February 2025', NULL, NULL, 0, '12', '2', '2025', 'open_access', NULL, 1, 1, 1, 1, 1, 'draft', '2025-04-06 07:28:18', '2025-04-06 07:28:18'),
(10, 'Volume 13 Issue 02 February 2025', NULL, NULL, 0, '13', '3', '2025', 'open_access', NULL, 1, 1, 1, 1, 1, 'published', '2025-04-06 07:28:34', '2025-04-06 07:28:34'),
(11, 'Volume 14 Issue 02 February 2025', NULL, NULL, 0, '114', '4', '2025', 'open_access', NULL, 1, 1, 1, 1, 1, 'published', '2025-04-06 07:28:56', '2025-04-08 02:25:19'),
(14, 'abcdhgh', '<p>avc12jhj</p>', NULL, 0, '12', '22', '2025', 'open_access', '2025-04-15', 1, 1, 1, 1, 1, 'published', '2025-04-06 08:49:58', '2025-04-06 08:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `issue_galleries`
--

CREATE TABLE `issue_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issue_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `journal_indexings`
--

CREATE TABLE `journal_indexings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal_indexings`
--

INSERT INTO `journal_indexings` (`id`, `title`, `image`, `link`, `status`, `order`, `created_at`, `updated_at`) VALUES
(1, 'amin', 'journal-indexing/7EPKOf7RCxo1PxRmntsrQ4c6MjOfoV2CLrNsDzdX.png', 'https://www.youtube.com/watch?v=LWy8y4TrwWo', 1, 0, '2025-04-08 02:38:48', '2025-04-08 02:38:48'),
(2, 'dsf', 'journal-indexing/wnLQzpLHGhiHMZDGbfjyhChxeBvdtINCOftH5juP.jpg', 'https://www.instagram.com/p/C1qr6J8P-ZK/', 1, 2, '2025-04-08 02:42:17', '2025-04-08 02:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2025_04_05_042912_create_editorial_boards_table', 1),
(8, '2025_04_05_045827_add_status_to_editorial_boards_table', 2),
(9, '2025_04_04_065628_create_subject_areas_table', 3),
(10, '2025_04_06_000000_create_issues_table', 4),
(11, '2025_04_07_000000_add_fields_to_articles_table', 5),
(12, '2025_04_08_000000_add_content_to_articles_table', 6),
(13, '2025_04_09_000000_add_status_to_articles_table', 7),
(14, '2025_04_10_000000_add_likes_to_articles_table', 8),
(15, '2025_04_11_000000_create_article_views_table', 9),
(16, '2025_04_12_000000_create_settings_table', 10),
(17, '2025_04_08_060021_create_contacts_table', 11),
(18, '2024_03_21_000000_create_journal_indexings_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1XDPuMgH7I2ceaPwiFGK74s1v9gjg7IldoF7MiJv', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiQkVCdnF4MktIRWRBY3FvaUNRbHlkYTQwN3RXSEZmWWVVS3ZzMlNpUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744335120),
('5nhxLlScG2TeyoTO7g3Cg8q0mlUpbDRsG6Qbg9PB', NULL, '2409:40c4:11c7:181d:b591:934b:1cd2:b1fe', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYTdydDBJR2JzM2NUSzk2NzR5TnBySFdPRzhCbGpVWDlCbFhFTms2dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vY3Jham91ci5heWF0aW5mb3RlY2guY29tL2FpbXMtc2NvcGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1744256950),
('aPawybZRcLaxXM6VMban31k7JXXCcDpdSap1hmsu', NULL, '2409:40c4:11c1:49e4:647f:17f8:c56c:e134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRnVUVjhETU5xQkY5M1AxV05yaGluTzA0TkV2NWhXUHNLMUtuQjg3OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vY3Jham91ci5heWF0aW5mb3RlY2guY29tL2FkbWluL2FydGljbGVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1744293903),
('EQs7K0NmRPTGJSYj1roSgdB1bdGpQtnzFj7b4psm', NULL, '46.17.174.192', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRDlFRjJybHpPTTZWMWVOWkVmeTc2c013UzBxMG5hb2JMY20xMzNSaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vY3Jham91ci5heWF0aW5mb3RlY2guY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744523166),
('EZGIZRrzeoxKPoR3PIi0g8f9iBVvICwOFpdEKoFV', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoieGdKZ2tPcUFjOHBaQVBCN0pKVHBLTnlVeXM2RnUzcW5jQXI2d1dMSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744285401),
('hZWe2QXp1jNvjepqBFF3r4SiNMX4tkrapKOCTZPJ', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidUpRMXFqNUlPSXdFQ2ltUHI2dm96U1NIVFpRTHZMQmRWNWgwV1JSUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744696982),
('I2317KEvh44hI9jEGeh6NWyIVhalrHClSUpQY6B5', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidDhadWFZUWZ6VjNvanpGMVlPVU1tVUZ4cFNhbTFHYXVsa2QxY1JjbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744603378),
('Kv2OMf3o7863Lb1Pu070vD8Bvtt7eBn7f3tRCnYX', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiMVlBUHZvYXpHRGNxdDFJbDBDT1M3eHZWZ2xmbEUxcTd3Q0dOVjdoMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744463857),
('lNASAL54jee4V5R8CvHgAJ2DLMaT8GRs199cFqR3', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiMFZudXhCWVhFdTdNNGhCcG40Y25rdUdUTXkwTFBGTk5senB2M0hueSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744810561),
('q2B4UyLaBJXpR1ZzTwnGfSJotFAFr8xoamEpWbwr', NULL, '2002:a516:66e8::a516:66e8', 'Mozilla/5.0 (Linux; Android 5.1.1; SM-J111F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.90 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWThnZjlaY2d3N2hVUUVId3hTUjZBazRFSzVmMURkSkdMWEFIRFVIUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vY3Jham91ci5heWF0aW5mb3RlY2guY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744731823),
('ROIXBLXZmNu8sIkVKOFI9cKyEfRUsaKkAaMpMLSV', NULL, '159.223.218.54', 'Mozilla/5.0 (compatible)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidVNrZTRRUWtzMmVoQXNRUVBPTGNHUldNMW1lVWt3RWNnRG9Ud1NGciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vY3Jham91ci5heWF0aW5mb3RlY2guY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744782642),
('rUAyHrCHmCOAumX0gljaDWL3ehum6mKQFdoNzVhn', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiamtTclp6bW8ySHRIc2tIRE5HT1R0b1V5cHgyd2JydjZlZThNM2gwcSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744505251),
('t8YmB2UffcCDPZdxaYWqBNh5UxvGmNtTKOMSgjTX', NULL, '23.27.145.35', 'Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibHdqVFlUWWVCSFU1NUNCQ240NU1YVE84WEFlcFZrd1RxNVpibDQ0ZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vY3Jham91ci5heWF0aW5mb3RlY2guY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744390141);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `group` varchar(255) NOT NULL DEFAULT 'general',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `group`, `created_at`, `updated_at`) VALUES
(1, 'current_issue_id', '14', 'journal', '2025-04-07 23:28:57', '2025-04-08 02:28:10'),
(2, 'smtp_host', 'gmail.smtp', 'smtp', '2025-04-07 23:32:56', '2025-04-07 23:32:56'),
(3, 'smtp_port', '587', 'smtp', '2025-04-07 23:32:56', '2025-04-07 23:32:56'),
(4, 'smtp_username', 'admin@example.com', 'smtp', '2025-04-07 23:32:56', '2025-04-07 23:32:56'),
(5, 'smtp_password', 'password', 'smtp', '2025-04-07 23:32:56', '2025-04-07 23:32:56'),
(6, 'smtp_encryption', 'tls', 'smtp', '2025-04-07 23:32:56', '2025-04-07 23:32:56'),
(7, 'mail_from_address', 'webexpert987s@yopmail.com', 'smtp', '2025-04-07 23:32:56', '2025-04-07 23:32:56'),
(8, 'mail_from_name', 'Laravel', 'smtp', '2025-04-07 23:32:56', '2025-04-07 23:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `subject_areas`
--

CREATE TABLE `subject_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_areas`
--

INSERT INTO `subject_areas` (`id`, `name`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mathematics', 'mathematics', '<p>The field of Mathematics encompasses the study of various theoretical and practical aspects related to mathematics. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(2, 'Physics', 'physics', '<p>As an academic discipline, Physics focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(3, 'Chemistry', 'chemistry', '<p>The field of Chemistry encompasses the study of various theoretical and practical aspects related to chemistry. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(4, 'Biology', 'biology', '<p>As an academic discipline, Biology focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(5, 'Computer Science', 'computer-science', '<p>Computer Science is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of computer science.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(6, 'Information Technology', 'information-technology', '<p>The field of Information Technology encompasses the study of various theoretical and practical aspects related to information technology. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(7, 'Artificial Intelligence', 'artificial-intelligence', '<p>Artificial Intelligence represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of artificial intelligence.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(8, 'Machine Learning', 'machine-learning', '<p>As an academic discipline, Machine Learning focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(9, 'Data Science', 'data-science', '<p>The study of Data Science has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(10, 'Statistics', 'statistics', '<p>Statistics is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of statistics.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(11, 'Economics', 'economics', '<p>Economics is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of economics.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(12, 'Business Administration', 'business-administration', '<p>The field of Business Administration encompasses the study of various theoretical and practical aspects related to business administration. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(13, 'Marketing', 'marketing', '<p>Marketing is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of marketing.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(14, 'Finance', 'finance', '<p>Finance is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of finance.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(15, 'Accounting', 'accounting', '<p>As an academic discipline, Accounting focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(16, 'Management', 'management', '<p>The study of Management has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(17, 'Psychology', 'psychology', '<p>Psychology represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of psychology.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(18, 'Sociology', 'sociology', '<p>Sociology is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of sociology.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(19, 'Anthropology', 'anthropology', '<p>Anthropology represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of anthropology.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(20, 'Political Science', 'political-science', '<p>As an academic discipline, Political Science focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(21, 'History', 'history', '<p>The study of History has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(22, 'Geography', 'geography', '<p>As an academic discipline, Geography focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(23, 'Environmental Science', 'environmental-science', '<p>The field of Environmental Science encompasses the study of various theoretical and practical aspects related to environmental science. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(24, 'Earth Science', 'earth-science', '<p>Earth Science represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of earth science.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(25, 'Astronomy', 'astronomy', '<p>As an academic discipline, Astronomy focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(26, 'Philosophy', 'philosophy', '<p>Philosophy is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of philosophy.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(27, 'Literature', 'literature', '<p>The field of Literature encompasses the study of various theoretical and practical aspects related to literature. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(28, 'Linguistics', 'linguistics', '<p>As an academic discipline, Linguistics focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(29, 'Languages', 'languages', '<p>Languages represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of languages.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(30, 'Arts', 'arts', '<p>Arts represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of arts.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(31, 'Architecture', 'architecture', '<p>As an academic discipline, Architecture focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(32, 'Engineering', 'engineering', '<p>Engineering is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of engineering.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(33, 'Medical Science', 'medical-science', '<p>Medical Science is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of medical science.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(34, 'Nursing', 'nursing', '<p>Nursing represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of nursing.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(35, 'Pharmacy', 'pharmacy', '<p>The study of Pharmacy has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(36, 'Law', 'law', '<p>As an academic discipline, Law focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(37, 'Education', 'education', '<p>The study of Education has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(38, 'Agriculture', 'agriculture', '<p>Agriculture represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of agriculture.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(39, 'Veterinary Science', 'veterinary-science', '<p>Veterinary Science is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of veterinary science.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(40, 'Sports Science', 'sports-science', '<p>The field of Sports Science encompasses the study of various theoretical and practical aspects related to sports science. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(41, 'Nutrition', 'nutrition', '<p>Nutrition is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of nutrition.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(42, 'Public Health', 'public-health', '<p>Public Health is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of public health.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(43, 'Biotechnology', 'biotechnology', '<p>Biotechnology is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of biotechnology.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(44, 'Neuroscience', 'neuroscience', '<p>Neuroscience represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of neuroscience.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(45, 'Genetics', 'genetics', '<p>Genetics represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of genetics.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(46, 'Ecology', 'ecology', '<p>As an academic discipline, Ecology focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(47, 'Microbiology', 'microbiology', '<p>Microbiology is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of microbiology.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(48, 'Geology', 'geology', '<p>Geology represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of geology.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(49, 'Oceanography', 'oceanography', '<p>The study of Oceanography has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(50, 'Meteorology', 'meteorology', '<p>The study of Meteorology has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(51, 'Quantum Physics', 'quantum-physics', '<p>Quantum Physics is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of quantum physics.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(52, 'Nanotechnology', 'nanotechnology', '<p>Nanotechnology is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of nanotechnology.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(53, 'Robotics', 'robotics', '<p>Robotics is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of robotics.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(54, 'Cybersecurity', 'cybersecurity', '<p>The study of Cybersecurity has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(55, 'Software Engineering', 'software-engineering', '<p>The study of Software Engineering has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(56, 'Network Engineering', 'network-engineering', '<p>The field of Network Engineering encompasses the study of various theoretical and practical aspects related to network engineering. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(57, 'Chemical Engineering', 'chemical-engineering', '<p>The field of Chemical Engineering encompasses the study of various theoretical and practical aspects related to chemical engineering. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(58, 'Civil Engineering', 'civil-engineering', '<p>Civil Engineering represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of civil engineering.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(59, 'Mechanical Engineering', 'mechanical-engineering', '<p>As an academic discipline, Mechanical Engineering focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(60, 'Electrical Engineering', 'electrical-engineering', '<p>As an academic discipline, Electrical Engineering focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(61, 'Aerospace Engineering', 'aerospace-engineering', '<p>The study of Aerospace Engineering has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(62, 'Biomedical Engineering', 'biomedical-engineering', '<p>The field of Biomedical Engineering encompasses the study of various theoretical and practical aspects related to biomedical engineering. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:07', '2025-04-04 23:59:07'),
(63, 'Materials Science', 'materials-science', '<p>The study of Materials Science has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(64, 'Urban Planning', 'urban-planning', '<p>Urban Planning represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of urban planning.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(65, 'Archaeology', 'archaeology', '<p>Archaeology represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of archaeology.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(66, 'Musicology', 'musicology', '<p>Musicology represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of musicology.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(67, 'Theatre Studies', 'theatre-studies', '<p>Theatre Studies is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of theatre studies.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(68, 'Film Studies', 'film-studies', '<p>As an academic discipline, Film Studies focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(69, 'Media Studies', 'media-studies', '<p>As an academic discipline, Media Studies focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(70, 'Journalism', 'journalism', '<p>Journalism represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of journalism.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(71, 'Communication Studies', 'communication-studies', '<p>The field of Communication Studies encompasses the study of various theoretical and practical aspects related to communication studies. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(72, 'Cultural Studies', 'cultural-studies', '<p>Cultural Studies represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of cultural studies.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(73, 'Gender Studies', 'gender-studies', '<p>The study of Gender Studies has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(74, 'Religious Studies', 'religious-studies', '<p>The study of Religious Studies has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(75, 'Ethics', 'ethics', '<p>Ethics is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of ethics.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(76, 'Logic', 'logic', '<p>The study of Logic has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(77, 'Metaphysics', 'metaphysics', '<p>As an academic discipline, Metaphysics focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(78, 'Epistemology', 'epistemology', '<p>As an academic discipline, Epistemology focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(79, 'Aesthetics', 'aesthetics', '<p>The field of Aesthetics encompasses the study of various theoretical and practical aspects related to aesthetics. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(80, 'Criminology', 'criminology', '<p>The field of Criminology encompasses the study of various theoretical and practical aspects related to criminology. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(81, 'International Relations', 'international-relations', '<p>International Relations is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of international relations.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(82, 'Public Administration', 'public-administration', '<p>Public Administration is a dynamic and evolving discipline that integrates knowledge from multiple domains. Researchers in this field explore both fundamental concepts and innovative applications, contributing to the broader understanding of public administration.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(83, 'Social Work', 'social-work', '<p>As an academic discipline, Social Work focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(84, 'Developmental Psychology', 'developmental-psychology', '<p>As an academic discipline, Developmental Psychology focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(85, 'Clinical Psychology', 'clinical-psychology', '<p>As an academic discipline, Clinical Psychology focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(86, 'Cognitive Science', 'cognitive-science', '<p>The field of Cognitive Science encompasses the study of various theoretical and practical aspects related to cognitive science. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(87, 'Behavioral Economics', 'behavioral-economics', '<p>The field of Behavioral Economics encompasses the study of various theoretical and practical aspects related to behavioral economics. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(88, 'Econometrics', 'econometrics', '<p>The field of Econometrics encompasses the study of various theoretical and practical aspects related to econometrics. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(89, 'Game Theory', 'game-theory', '<p>The study of Game Theory has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(90, 'Operations Research', 'operations-research', '<p>Operations Research represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of operations research.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(91, 'Project Management', 'project-management', '<p>The field of Project Management encompasses the study of various theoretical and practical aspects related to project management. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(92, 'Supply Chain Management', 'supply-chain-management', '<p>As an academic discipline, Supply Chain Management focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(93, 'Human Resource Management', 'human-resource-management', '<p>The field of Human Resource Management encompasses the study of various theoretical and practical aspects related to human resource management. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(94, 'Strategic Management', 'strategic-management', '<p>As an academic discipline, Strategic Management focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(95, 'Organizational Behavior', 'organizational-behavior', '<p>The study of Organizational Behavior has seen significant advancements in recent years, with new technologies and methodologies reshaping traditional approaches. This field continues to attract scholars interested in pushing the boundaries of knowledge and innovation.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(96, 'Consumer Behavior', 'consumer-behavior', '<p>As an academic discipline, Consumer Behavior focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(97, 'Digital Marketing', 'digital-marketing', '<p>As an academic discipline, Digital Marketing focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(98, 'Entrepreneurship', 'entrepreneurship', '<p>The field of Entrepreneurship encompasses the study of various theoretical and practical aspects related to entrepreneurship. It involves rigorous research methodologies and analytical frameworks that help understand the core principles and applications.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(99, 'Innovation Management', 'innovation-management', '<p>As an academic discipline, Innovation Management focuses on developing critical thinking and problem-solving skills. Students learn to apply theoretical knowledge to real-world scenarios, making this field both intellectually stimulating and practically relevant.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08'),
(100, 'Sustainable Development', 'sustainable-development', '<p>Sustainable Development represents an interdisciplinary approach to understanding complex phenomena. It draws upon methods and insights from related fields, offering a comprehensive perspective on challenges and opportunities in the domain of sustainable development.</p>', NULL, '2025-04-04 23:59:08', '2025-04-04 23:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `subject_area_article`
--

CREATE TABLE `subject_area_article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_area_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_area_article`
--

INSERT INTO `subject_area_article` (`id`, `subject_area_id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 38, 1, NULL, NULL),
(2, 15, 3, NULL, NULL),
(3, 61, 3, NULL, NULL),
(4, 79, 3, NULL, NULL),
(5, 38, 3, NULL, NULL),
(6, 19, 3, NULL, NULL),
(7, 65, 3, NULL, NULL),
(8, 31, 3, NULL, NULL),
(9, 7, 3, NULL, NULL),
(10, 30, 3, NULL, NULL),
(11, 25, 3, NULL, NULL),
(12, 87, 3, NULL, NULL),
(13, 4, 3, NULL, NULL),
(14, 62, 3, NULL, NULL),
(15, 43, 3, NULL, NULL),
(16, 12, 3, NULL, NULL),
(17, 57, 3, NULL, NULL),
(18, 3, 3, NULL, NULL),
(19, 58, 3, NULL, NULL),
(20, 85, 3, NULL, NULL),
(21, 86, 3, NULL, NULL),
(22, 71, 3, NULL, NULL),
(23, 5, 3, NULL, NULL),
(24, 96, 3, NULL, NULL),
(25, 80, 3, NULL, NULL),
(26, 72, 3, NULL, NULL),
(27, 54, 3, NULL, NULL),
(28, 9, 3, NULL, NULL),
(29, 84, 3, NULL, NULL),
(30, 97, 3, NULL, NULL),
(31, 24, 3, NULL, NULL),
(32, 46, 3, NULL, NULL),
(33, 88, 3, NULL, NULL),
(34, 11, 3, NULL, NULL),
(35, 37, 3, NULL, NULL),
(36, 60, 3, NULL, NULL),
(37, 32, 3, NULL, NULL),
(38, 98, 3, NULL, NULL),
(39, 23, 3, NULL, NULL),
(40, 78, 3, NULL, NULL),
(41, 75, 3, NULL, NULL),
(42, 68, 3, NULL, NULL),
(43, 14, 3, NULL, NULL),
(44, 89, 3, NULL, NULL),
(45, 73, 3, NULL, NULL),
(46, 45, 3, NULL, NULL),
(47, 22, 3, NULL, NULL),
(48, 48, 3, NULL, NULL),
(49, 21, 3, NULL, NULL),
(50, 93, 3, NULL, NULL),
(51, 6, 3, NULL, NULL),
(52, 99, 3, NULL, NULL),
(53, 81, 3, NULL, NULL),
(54, 70, 3, NULL, NULL),
(55, 29, 3, NULL, NULL),
(56, 36, 3, NULL, NULL),
(57, 28, 3, NULL, NULL),
(58, 27, 3, NULL, NULL),
(59, 76, 3, NULL, NULL),
(60, 8, 3, NULL, NULL),
(61, 16, 3, NULL, NULL),
(62, 13, 3, NULL, NULL),
(63, 63, 3, NULL, NULL),
(64, 1, 3, NULL, NULL),
(65, 59, 3, NULL, NULL),
(66, 69, 3, NULL, NULL),
(67, 33, 3, NULL, NULL),
(68, 77, 3, NULL, NULL),
(69, 50, 3, NULL, NULL),
(70, 47, 3, NULL, NULL),
(71, 66, 3, NULL, NULL),
(72, 52, 3, NULL, NULL),
(73, 56, 3, NULL, NULL),
(74, 44, 3, NULL, NULL),
(75, 34, 3, NULL, NULL),
(76, 41, 3, NULL, NULL),
(77, 49, 3, NULL, NULL),
(78, 90, 3, NULL, NULL),
(79, 95, 3, NULL, NULL),
(80, 35, 3, NULL, NULL),
(81, 26, 3, NULL, NULL),
(82, 2, 3, NULL, NULL),
(83, 20, 3, NULL, NULL),
(84, 91, 3, NULL, NULL),
(85, 17, 3, NULL, NULL),
(86, 82, 3, NULL, NULL),
(87, 42, 3, NULL, NULL),
(88, 51, 3, NULL, NULL),
(89, 74, 3, NULL, NULL),
(90, 53, 3, NULL, NULL),
(91, 83, 3, NULL, NULL),
(92, 18, 3, NULL, NULL),
(93, 55, 3, NULL, NULL),
(94, 40, 3, NULL, NULL),
(95, 10, 3, NULL, NULL),
(96, 94, 3, NULL, NULL),
(97, 92, 3, NULL, NULL),
(98, 100, 3, NULL, NULL),
(99, 67, 3, NULL, NULL),
(100, 64, 3, NULL, NULL),
(101, 39, 3, NULL, NULL),
(102, 65, 1, NULL, NULL),
(103, 61, 104, NULL, NULL),
(104, 38, 104, NULL, NULL),
(105, 61, 2, NULL, NULL),
(106, 38, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_password_reset_tokens`
--
ALTER TABLE `admin_password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_issue`
--
ALTER TABLE `article_issue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_issue_article_id_foreign` (`article_id`),
  ADD KEY `article_issue_issue_id_foreign` (`issue_id`);

--
-- Indexes for table `article_views`
--
ALTER TABLE `article_views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_views_article_id_ip_address_viewed_at_index` (`article_id`,`ip_address`,`viewed_at`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editorial_boards`
--
ALTER TABLE `editorial_boards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `editorial_boards_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_galleries`
--
ALTER TABLE `issue_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issue_galleries_issue_id_foreign` (`issue_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_indexings`
--
ALTER TABLE `journal_indexings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`),
  ADD KEY `settings_key_group_index` (`key`,`group`);

--
-- Indexes for table `subject_areas`
--
ALTER TABLE `subject_areas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subject_areas_slug_unique` (`slug`);

--
-- Indexes for table `subject_area_article`
--
ALTER TABLE `subject_area_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_area_article_subject_area_id_foreign` (`subject_area_id`),
  ADD KEY `subject_area_article_article_id_foreign` (`article_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `article_issue`
--
ALTER TABLE `article_issue`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `article_views`
--
ALTER TABLE `article_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `editorial_boards`
--
ALTER TABLE `editorial_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `issue_galleries`
--
ALTER TABLE `issue_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journal_indexings`
--
ALTER TABLE `journal_indexings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject_areas`
--
ALTER TABLE `subject_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `subject_area_article`
--
ALTER TABLE `subject_area_article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_issue`
--
ALTER TABLE `article_issue`
  ADD CONSTRAINT `article_issue_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_issue_issue_id_foreign` FOREIGN KEY (`issue_id`) REFERENCES `issues` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `article_views`
--
ALTER TABLE `article_views`
  ADD CONSTRAINT `article_views_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `issue_galleries`
--
ALTER TABLE `issue_galleries`
  ADD CONSTRAINT `issue_galleries_issue_id_foreign` FOREIGN KEY (`issue_id`) REFERENCES `issues` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subject_area_article`
--
ALTER TABLE `subject_area_article`
  ADD CONSTRAINT `subject_area_article_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_area_article_subject_area_id_foreign` FOREIGN KEY (`subject_area_id`) REFERENCES `subject_areas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
