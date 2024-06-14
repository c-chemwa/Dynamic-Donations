# Dynamic-Donations
This is our IS Project 1 application, to solve the donation problem in children's homes.

Chapter One: Introduction 

Background Information 

Sub-organization of the larger Kenya Children Homes (KCH) is Thomas Barnardo's Children's Home. The late Thomas John Barnardo founded the organization out of his love for aiding underprivileged kids. In 2002, the Scottish Charity took over the facility and established the Kenya Children's Homes (KCH) through the Balcraig Foundation ("Kenya Children's Homes," 2014). 

Jonathan Gloag Academy was started in the same year to facilitate the schooling of the children who had been taken into the home and the school continues to do so up to the present time. The organization is a non-profit organization since it focuses on catering for the children who are destitute and have been orphaned or abandoned (History – Jonathan Gloag Academy, 2023). 

Some issues with the organization's operating system are noted in the handling of donations and stock management. This is a first-hand experience that led to the birth of this project. When donations come to the organization, especially clothes and items like toys and beds, just to mention a few, they are stored in a container until it gets full. After which the container is then emptied, and the various things are sorted.  

The time taken for the container to get full is about 3-4 months. This means that the items that are already inside the container get subjected to the elements, and they end up getting spoilt or are rendered unsuitable to help the children. 

The other issue that is prominent is stock management. Since the home has facilities that it provides for a fee, they have items that help in the organization of such events. These include seat covers, tablecloths, draping and tiebacks. Managing these items is quite a hassle because there are many and they sometimes end up lost in the various stores. When this happens, the organization is forced to rent them from another organization so that the events can run smoothly. This brings about extra costs that hinder the ability to support the children properly. 

Because the materials deteriorate after time spent outside, money that was donated with the goal of boosting the wellbeing of youth is therefore wasted. This negligence not only results in money losses but also deprives the receivers of basic needs that may have improved their lives. Furthermore, this also results in a surplus of items that are not necessarily required by the organization at a particular time. 

Some solutions that have been implemented to solve this issue are the likes of Donorbox which is a web-based platform for managing donations, which allows non-profit organizations to set up online donation pages and monitor incoming contributions. The ability to automatically create donor and donation records, manage recurring donations, segment donors, merge duplicate records, and provide reporting are some of the key features. Other apps are DonorKite and Funraise. The apps lacked a key aspect towards solving this problem as they were not able to provide analysis reports on what donations were of a higher priority. 

This project aims to incorporate the said analysis model to provide a comprehensive web-based application that is easy to use and navigate, as well as providing detailed information on what donations have been received and determining the urgency of the different types of donations. 

Problem Statement 

Handling of donations should ideally be seamless. Receiving the donations should be smooth in terms of the actual recording, receiving, and confirming their state. They should also be donated in alignment with the state of urgency. From there, the donations should be stored in a well-ventilated, secure room that will ensure the safety and quality of the donations, whether they are food items, clothing items, or items like beds and toys. Allocation of the donations to the children should be based on the necessity of the said items as well as the priority of the specified needs for the items.  

However, in the organization under consideration, there is a failure to follow these ideal steps. When receiving the donations, the donations received are not relevant to their immediate needs. Additionally, the donations are stored in less-than-ideal situations, subjecting them to wear and tear that degrades their quality. This results in a surplus of items that the organization does not need and a deficiency in their actual needs, which defeats the purpose of the whole children's home. 

 

Objectives 

General Objective 

To develop a web application that will aid in handling donated items to children’s homes and provide analytical insights to aid in decision making. 

Specific Objectives 

To analyze the nature of operations in children’s homes. 

To discuss the different challenges faced in managing donations correctly. 

To evaluate the existing solutions relevant to donations handling in children’s homes 

To develop a web application that will aid in determining the most needed items by the children’s home. 

Research Questions 

What is the nature of operations in children’s homes? 

What are the different challenges faced during handling of donations? 

What are the existing solutions and how can the system improve on them? 

How will a web application be developed that will aid in determining the most needed items by the children’s home? 

Justification 

The project team expresses confidence in asserting that the project’s solution stands out as the optimal choice when weighed against alternative options. This confidence stems from the fact that the solution's primary focus is the success and well-being of the organization it serves. By carefully integrating state-of-the-art analysis tools, the technology ensures a transparent and efficient management system for tracking all elements of accepted gifts. Details such as the donations received, the exact time they were given, and the distinctive qualities of each donation are all accurately recorded. By streamlining the record-keeping procedure and facilitating an in-depth analysis of donation trends, this methodical approach aids in making decisions consistent with the organization's goals and objectives. 

Furthermore, the robust analytical characteristics of the solution provide witness to how effectively it promotes accountability, transparency, and strategic planning within the organizational framework—all of which result in enhanced effectiveness and impact via data-driven decision-making. By employing this powerful combination of meticulous record-keeping and state-of-the-art analytical tools, our project sets itself apart as the greatest choice for organizations seeking a comprehensive, trustworthy, and creative solution to their donation management needs. 

Scope and Limitations 

Scope of the Project 

The proposed project's purpose is to develop a comprehensive Donation Analysis Expert System (DMS) that will facilitate the tracking and analysis of donations by non-profit organizations. The system will have the following main functions: 

Contribution Intake: Providing an easy-to-use online platform for donors to donate their monetary, item, and volunteer contributions.  

Donor Management: Creating and maintaining donor profiles, tracking previous donations, listing the required needs, and creating a personalized thank-you note, and acknowledgment receipts are all included in donor management.  

Inventory Management: Counting the number of donated items, categorizing them, and assigning them to recipients or internal projects.  

Reports and Analysis: The system will generate comprehensive reports and analytics that provide information about the effectiveness of fundraising campaigns, the trends in donations and donor demographics. The reports will also shed light on what donations the organization requires more. 

Engagement and Communication: Provide newsletters, automated emails, and updates on the impacts of the donations for the donors to stay connected. 

Limitations 

It is imperative to acknowledge that the DAES, despite its vast capabilities, is subject to several constraints. 

Scalability: Even though the system will be built to a certain capacity, there may still be problems managing a high volume of donor interactions or an unexpected influx of donations, particularly during times of high fundraising activity or in times of emergency. 

Integration: It may be challenging to integrate the DAES with other software programs that are currently in use or external services (such payment gateways and CRM systems) due to API limitations or compatibility issues.  

Data Accuracy: The accuracy of the contribution and donor information depends on how accurate and comprehensive the users' data is. Errors can still occur from inadequate or human-made data entry even when validation checks and data integrity procedures are put in place.  

Training and support: To ensure successful system onboarding and ongoing use, users will receive enough training and support. The degree of a user's technological comfort and ability to learn new systems might impact how effective training and support are. 

 

Chapter Two: Literature Review 

 

Introduction 

This chapter presents a literature review, providing an overview of the nature of donations received by children’s homes, challenges encountered by these organizations in managing donations effectively, examines existing donations management solutions, and identifies areas for improvement. It lays the groundwork for understanding how the proposed donation handling website can offer solutions to these issues. 

Nature of Operations in Children’s Homes 

Children's homes function as residential care facilities, offering a haven of safety and nurture for children encountering situations such as orphanhood, abandonment, or family incapacity due to diverse circumstances (Browne, 2017). These establishments are dedicated to fulfilling the physical, emotional, educational, and developmental requirements of the children entrusted to their care. The operational dynamics within children's homes typically entail the following dimensions: 

2.2.1 Residential Care. 

Within children's homes, children reside full-time in a homelike setting. This entails providing essential necessities such as housing, food, clothing, and personal care items (Zinn & Courtney, 2017). 

2.2.2 Education and Skill Development. 

Many children's homes emphasize educational opportunities by either operating on-site schools or facilitating enrollment in local educational institutions. Furthermore, some homes offer vocational training and skill development programs to equip children for future employment or independent living (Maluccio et al., 2000). 

2.2.3 Recreational and Extracurricular Activities. 

In promoting overall well-being and personal growth, children's homes organize recreational activities, sports, and extracurricular programs. These endeavors aim to nurture physical, social, and emotional development. 

 

2.2.4 Counseling and Support Services. 

Given the likelihood of children in residential care having experienced trauma or facing emotional challenges, children's homes provide counseling services and support programs to address these needs and enhance their mental well-being (Whetten et al., 2011). 

2.2.5 Healthcare and Medical Attention. 

The assurance of children's health and well-being stands as a pivotal aspect of operations within children's homes. This encompasses the provision of routine medical examinations, access to healthcare provisions, and catering to any special medical requisites or disabilities (Embleton et al., 2017). 

The specific nature of operations may vary depending on the size, resources, and specialized focus of each children's home. However, the overall goal is to create a nurturing and supportive environment that promotes the holistic development and well-being of the children in their care (Browne, 2017). 

Challenges Faced in Managing of Donations 

One of the primary challenges faced by children’s homes is the lack of transparency in communicating their specific needs to potential donors. Traditional methods, such as flyers and word-of-mouth, often fail to provide a clear and up-to-date picture of the organization’s most urgent requirements (Smith & Johnson, 2020). This can lead to a mismatch between the donations received and the actual needs, resulting in waste or shortages, which can hinder the organization’s ability to effectively serve its beneficiaries. 

Additionally, many children’s homes struggle with inefficient and manual processes for tracking and managing donations (Shaheen et al., 2021). Relying on paper records or basic spreadsheets can be time-consuming, error-prone, and limits the organizations' ability to analyze donation patterns and trends effectively (De Silva, 2022). This lack of robust data management can make it difficult for charities to make informed decisions, plan their operations strategically, and allocate resources optimally. 

Furthermore, donor engagement and retention can be a significant challenge. Without a seamless and user-friendly experience, donors may feel disconnected from the impact of their contributions, potentially leading to reduced future donations (Gonzalez & Williams, 2019). Maintaining a strong and loyal donor base is crucial for the long-term sustainability of children’s homes organizations, as it provides a reliable source of funding and support. 

Existing Solutions 

Donorbox 

This is a web-based donations management platform that allows charities to create online donation pages and track incoming contributions. Key features include automatic donor/donation record creation, recurring donation management, donor segmentation, duplicate record merging, and reporting capabilities. While comprehensive for financial donations, Donorbox lacks specific functionality for real-time tracking and updating of item-specific needs, which is a gap addressed by the proposed solution (Free Donate Button - Donorbox Nonprofit Fundraising Software, 2024). 

 

Figure 2.1 DonorBox Landing Page 

Funraise 

This is an online donation platform that is not restricted to a particular organization. It accepts different organizations to use its platform. It leans more on fundraising for organizations but still offers the management handling of these donations. This therefore makes it to primarily focus on facilitating financial contributions and does not provide robust features for managing and communicating item-specific donations needs (The Best Nonprofit Fundraising Solution | Funraise, 2015). 

 

Figure 2.2 Funraise Landing Page 

DonorKite 

DonorKite is also a platform designed to help charities track and manage donations. Charities can log in to a panel where they can keep track of their donors, manage the donations they receive, and update their payment information. DonorKite also offers reports to help in decision making of the organizations. Although, since they deal with a large group of organizations, they only deal with monetary donations (Donation Management System for Non-Profit, Church, Charity, NGOs - DonorKite, 2024). 

Figure 2.3 DonorKite Landing Page 

 

Figure 2.4 DonorKite Features 

Gaps in the Existing Solutions 

While the existing solutions offer valuable features for donation management, they fail to address the specific challenge of providing a transparent, real-time, and interactive platform for communicating and managing item-specific donation needs. Most solutions focus primarily on tracking financial donations or lack the ability to dynamically update and remove items from a needs list as donations are received (Kapur & Mehta, 2022). This limitation can lead to a disconnect between the organization's communicated needs and the actual donations received, resulting in potential waste or shortages. 

Additionally, many existing solutions do not prioritize the donor experience, making it difficult for potential contributors to easily view and understand the organization's most pressing needs, potentially hindering their motivation to donate (Lal & Gupta, 2021). Without a user-friendly interface that clearly displays the organization's specific item requirements, donors may struggle to make informed decisions about their contributions, leading to a less targeted and impactful donation process. 

Furthermore, existing solutions often lack integration with real-time inventory management systems, making it challenging for organizations to maintain accurate and up-to-date information on their donation needs (Singh & Kapoor, 2020). This disconnects between the donation management system and the organization's actual inventory levels can lead to inefficiencies and potential errors in communicating needs to donors. 

Lastly, many existing solutions fail to provide comprehensive reporting and analytics capabilities, limiting the organization's ability to gain valuable insights into donation patterns, donor behavior, and the effectiveness of their donation campaigns (Sharma & Patel, 2023). Without robust data analysis tools, charities may miss opportunities to optimize their donation management strategies and make data-driven decisions. 

Conceptual Framework 

The proposed donation tracking website aims to bridge the gap by providing a comprehensive platform that addresses the key challenges faced by charitable organizations. The conceptual framework for the website is illustrated in the following diagram: 

 

Figure 2.5 Conceptual Diagram 

The website will have two primary user roles: administrators and donors/public users. Administrators can update a dynamic needs list, specifying the items and quantities required by the organization. This needs list will be displayed on the website for donors to view, ensuring transparency and clear communication of the organization’s most pressing needs. 

As donors contribute items through the website or in-person, the donations will be logged into a central database that integrates with the organization’s inventory management system. This seamless integration will ensure that the needs list accurately reflects the organization’s real-time inventory levels, preventing potential mismatches or waste. 

The needs list will automatically update in real-time, removing items from the list once the required quantity has been met. This dynamic updating process will provide donors with a clear understanding of the organization’s evolving needs, enabling them to make informed and targeted donations that align with the most urgent requirements. 

Additionally, the proposed website will prioritize donor experience by offering a user-friendly interface that simplifies the donation process. Donors will be able to easily navigate the website, view the dynamic needs list, and make contributions seamlessly, fostering a sense of connection and engagement with the organization’s mission. 

By addressing the gaps in existing solutions and leveraging modern technologies, the proposed donation handling website aims to improve the way charitable organizations manage and communicate their donation needs, ultimately enabling them to better serve their beneficiaries and drive meaningful impact. 

 

Chapter Three: Methodology 

 

Introduction 

This chapter outlines the software development methodology, system analysis, design considerations, and implementation details for the proposed Donation Management System (DMS) web application. The DMS aims to address the challenges faced by children's homes in managing and tracking donations effectively, providing a transparent and user-friendly platform for donors and administrators. Additionally, this section highlights the tools, techniques, and deliverables expected for the successful development and deployment of the application. 

Research Approach: Object Oriented Analysis and Design (OOAD) 

The Object-Oriented Analysis and Design (OOAD) approach will be adopted to develop the DMS website. OOAD is a structured methodology that emphasizes modularity, reusability, and maintainability of software systems (Sharma & Kushwaha, 2022). By leveraging object-oriented principles, OOAD promotes a clear separation of concerns, encapsulation, and abstraction, which are particularly beneficial for complex systems like the proposed DMS. 

The OOAD approach aligns well with the project's requirements, as it facilitates the modeling and design of the website's components, such as the dynamic needs list, donor management, inventory integration, and reporting modules. Additionally, OOAD's emphasis on iterative and incremental development aligns with the chosen Agile methodology, enabling continuous refinement and adaptation to any evolving requirements. 

Software Development Methodology: Agile (scrum) 

A software development methodology is a set of rules and guidelines used in researching, planning, designing, developing, testing, setup and maintaining a software product. The methodology also includes core values upheld by the project team and tools used in the planning, development, and implementation process. 

The Agile methodology, specifically the Scrum framework, will be used to develop the DMS website. Scrum's iterative and incremental approach (Ahimbisibwe et al., 2017) aligns well with the dynamic nature of the project, allowing for flexibility and adaptability to changing requirements. 

The project will be divided into sprints, each delivering a potentially shippable increment of the product. The Scrum ceremonies, including daily stand-ups, sprint planning, review, and retrospective meetings, will facilitate continuous collaboration, feedback, and process improvement. 

The choice of Scrum is justified by its ability to accommodate changing requirements, foster close collaboration with stakeholders, and prioritize the delivery of high-value features early in the development cycle. Additionally, Scrum's emphasis on transparency and continuous improvement aligns with the project's goal of providing a transparent and user-friendly donation management experience. 

Sprint Planning 

At the beginning of each sprint, the development team will collaborate to select and plan the work to be accomplished during the sprint. This phase includes activities related to planning and estimating tasks, such as approving, estimating, and committing user stories, and creating tasks, estimating tasks, and creating a sprint backlog. 

The product supervisor will kick off things by going through the product backlog and explaining the top priority user stories to the team. They will provide context and answer any questions the developers have. The developers will then engage in an open discussion, analyzing the requirements and breaking down the user stories into simpler tasks. As they go through each task, they will provide estimation of time to gauge the level of effort involved. 

Once all this is estimated, the team will collaboratively determine how much work they can realistically commit to for this sprint based on their historical capacity. The chosen user stories and their associated tasks will be transferred into the sprint backlog. With the sprint backlog solidified, the developers will begin to self-organize around the tasks, often pairing up to work through the various items together over the course of the sprint (Cohn, 2004). 

Implementation and Daily Scrum 

This phase is focused on the execution of tasks and activities necessary for the team to develop the DMS website. These activities include the team developing various deliverables and testing the product before proceeding to the next sprint. 

During the daily scrums, the developers will synchronize their activities, discuss progress, and identify any issues. 

Sprint Review 

At the end of each sprint, the team will conduct a sprint review. During this phase the team will review the deliverables and the work done so far, to determine ways to improve the practices and methods used to work on the project. 

Sprint Retrospective 

The team will also reflect on their process, identify areas for improvement, and create a plan for implementing changes in the next sprint. This is to make sure the improvements to the system are made well and in time for the deployment of the project. 

Release 

The release phase marks the end point of the team's hard work on the DMS website project. Their primary focus will shift to delivering the accepted deliverables and preparing for deployment. 

However, before closing out the project entirely, the team will undergo a critical retrospective process. They will openly discuss and recognize what practices were successful throughout the project's life cycle and which ones proved challenging or inefficient. This final retrospective will provide valuable insights and lessons learned for future projects. 

Methodology Diagram 

 

Text Box 

What is Scrum? | The Agile Journey: A Scrum overview 

Figure 3.2 Scrum Process Diagram 

Justification 

The methodology scrum was chosen because of the following reasons: 

Ability to accommodate changing requirements: The DMS project may require modifications or additions to the requirements as the development progresses. Scrum's iterative nature and short sprints allow for these changes to be incorporated seamlessly, ensuring that the final product meets the evolving needs of the organization. 

Emphasis on transparency and continuous improvement: Scrum's practices, such as daily stand-ups and sprint retrospectives, promote transparency and continuous improvement within the development team. This aligns with the project's goal of providing a transparent and user-friendly donation management experience while continuously refining the processes and product based on feedback and lessons learned. 

Software Requirements Analysis 

Requirements Elicitation 

To understand the problem domain and gather requirements effectively, the following approach will be taken: 

3.4.1. Data collection 

Analyze existing literature, case studies, and industry reports related to donation management and nonprofit organizations. 

Perform analysis of existing donation management solutions to identify gaps and opportunities for improvement. 

Requirements gathering. 

The team will employ use case modeling techniques to capture requirements in a structured and comprehensible manner. This is to ensure the proposed project meets the expected objectives and satisfies the organization. 

Functional Requirements 

The DAES website will have two primary user roles: administrators and donors/public users. Administrators will be able to manage the dynamic needs list, specifying items and quantities required by the organization.  

Donors will be able to view the needs list, have a form to fill in what they would like to donate, make donations, and track their contribution history. This will ensure seamless flow of operations from the donation of the items to the receiving of the said items. 

Other functional requirements include inventory integration. This will ensure when donating the items, they don’t overflow in the system according to the limits. Real-time updates will also be crucial in maintaining the priority of the most needed items by the organization.  

 

Non-Functional Requirements 

The website should prioritize usability, with an intuitive and user-friendly interface for both administrators and donors. This will make the donation process look pleasant and flow smoothly from start to finish. It will also facilitate ease of use for those not used to using the internet or related services. 

Performance is crucial to ensure responsiveness during periods of high traffic or data volume. Security measures, such as encryption and access control, will be implemented to protect sensitive donor information.  

The website should also be accessible across various browsers. This is to cater for those who lack access to certain software whether it is due to location or connectivity issues. This will ensure it is universally accessible to all. 

System Narrative 

The DAES website will serve as a centralized platform for children's homes to communicate their specific item needs to potential donors. Administrators will have a dedicated interface to manage the dynamic needs list, updating quantities as donations are received or requirements change. The public-facing side of the website will prominently display this needs list and have a form where the donors will fill in what they would like to donate ensuring transparency and clarity for donors. 

As donors contribute items through the website or in-person, the donations will be logged into a database integrated with the organization's inventory management system. The needs list will automatically update in real-time, removing items once the required quantity has been met. This dynamic updating process will provide donors with a clear understanding of the evolving needs, enabling targeted and impactful donations. 

The web application will offer comprehensive analytics capabilities, empowering administrators to gain valuable insights into donation patterns, donor behavior, and campaign effectiveness. Additionally, the platform will prioritize donor experience through a user-friendly interface, streamlining the donation process and fostering engagement with the organization's mission. 

System Design 

Use Case Diagram 

The system will have two primary users: donors/public users and administrators. Administrators can update a dynamic needs list, specifying the items and quantities required by the organization. They will also be able to view every donation made by an individual for accountability purposes. 

The donors will be able to donate, view the previous donations they have made through the website. 

Class Diagram 

The different classes in the system will facilitate the seamless flow of navigation and organization in the system and provide conciseness in the code. These will contain the different functions the system will employ to solve the problem. 

Entity Relationship Diagram (ERD) 

The ERDs will show the different relationships between the tables and the data shared between the two. This will be essential in providing the analytics necessary to generate the reports that will indicate the urgency of certain items that come through donations. 

Database Schema 

The database will feature tables that contain information about the public users/donors, the items donated with all their details as well as a table with all the details about the items the organization needs the most, relationships between the two tables, users, and donations, for easy analysis of the donations and having different views to show the data received by the system. 

System Development Tools and Techniques 

Some of the tools we shall be using are: 

MySQL 

As a relational database management system, MySQL plays a crucial role in storing and managing data for projects. This will allow the designing of the database schema, organization, and structuring of data according to the project's requirements. MySQL shall serve as a robust storage solution, enabling the retrieval and manipulation of data. Furthermore, it shall enable the execution of SQL queries, performing operations like data retrieval, insertion, updating, and deletion, ensuring seamless data management. 

Figma 

Figma, a web-based design tool, assists in creating visually appealing and user-friendly interfaces for web and mobile applications. It facilitates collaborative design, allowing team members to share designs and iterate on design concepts in real-time. Figma's prototyping capabilities enable the creation of interactive prototypes with clickable elements and transitions, simulating user interactions and workflows, ensuring a seamless design-to-development process. 

 

APIs 

APIs (Application Programming Interfaces) play a crucial role in enabling communication and interaction between different software applications. They facilitate the integration of third-party services, libraries, and platforms into web applications, extending functionality and accessing external data sources. APIs enable seamless data exchange between frontend and backend components and between different software systems. Additionally, they can be custom made to expose specific functionality or data from a web application, allowing external clients or internal systems to interact with the application's features and data. 

Frontend Development 

This project uses HTML, CSS, and JavaScript for the front-end development. This will make sure the web application has an appealing interface that will attract people to interact with the system and donate. 

Backend Development 

PHP, MySQL and XAMMP are used in this project to handle the back-end development. Laravel will be used to ensure seamless interaction with the database and make it easier for storage of data and information and provide the analysis tool with adequate information to provide reports. 

Development Environment and Tools 

The project employs the use of Visual Studio Code which is a lightweight and extensible code editor with excellent support for several technologies. It will also be using Git which is a distributed version control system for tracking changes, collaborating, and managing source code. All the versions of the system will be uploaded and updated on GitHub, a web-based hosting service for Git repositories, enabling collaboration and code management. 

Testing 

XAMPP 

XAMPP, a web server solution stack package, plays a vital role in setting up local development environments. It allows testing and debugging of web applications locally on Windows, macOS, or Linux systems without the need for an internet connection. XAMPP includes the Apache HTTP Server, enabling serving of web pages and handling of HTTP requests within local environment. 

Deliverables 

The project will deliver a fully functional Donation Analysis Expert System (DAES) website, including the following key modules: 

Dynamic Needs List Management Module: This module will enable administrators to create, update, and manage a dynamic list of required items for children's homes. It will allow categorization and prioritization of needs, ensuring donors can easily identify and contribute to the most pressing requirements. 

Donor Interface and Donation Process Module: This module will provide a user-friendly interface for donors to browse the needs list, select items to donate, and complete the donation process seamlessly.  

Inventory Integration and Real-Time Updates Module: This module will integrate with the existing inventory management systems of children's homes, enabling real-time updates of donated items and stock levels. It will help avoid duplication and ensure that the needs list accurately reflects the current requirements. 

Analytics Dashboard Module: This module will offer a comprehensive analytics dashboard, providing valuable insights and visualizations to the administrator. 

Donation Receipt Generation Module: This module will automatically generate donation receipts for donors, ensuring proper acknowledgment and record-keeping. The receipts will include relevant details, such as the donated items. 

User Authentication and Access Control Module: This module will implement user authentication and access control mechanisms, ensuring secure access to the DAES website. It will include features such as role-based access control and password policies. 

 

Chapter Four: Requirements Analysis and Design 

 

Requirements Analysis 

 

Functional Requirements 

The Dynamic Donations web application aims to streamline the donations management process for Thomas Barnardo Children’s Home. The key functional requirements identified are: 

Dynamic Needs List Management: Administrators should be able to create, update, and manage a dynamic list of items required by the children's home. This list will display the items categorized by priority, along with the desired quantities. 

Donor Interface and Donation Process: The system will provide a user-friendly interface for donors to browse the needs list, select items they wish to donate, and complete the donation process seamlessly. Donors should be able to track their previous donations. 

Inventory Integration and Real-Time Updates: The application will integrate with the existing inventory management system of the children's home. As donations are received, the needs list will update in real-time, removing items once the required quantity has been met. 

Analytics Dashboard: Administrators will have access to a comprehensive analytics dashboard, providing valuable insights and visualizations on donation patterns, donor behavior, and campaign effectiveness. 

Donation Receipt Generation: The system will automatically generate donation receipts for donors, including details of the donated items, to ensure proper acknowledgment and record-keeping. 

User Authentication and Access Control: Secure access to the application will be implemented through user authentication and role-based access control mechanisms. 

 

Non-Functional Requirements 

In addition to the functional requirements, the following non-functional requirements have been identified: 

 

Usability: The application should prioritize an intuitive and user-friendly interface for both administrators and donors, ensuring ease of use and a pleasant donation experience. 

Performance: The system should be responsive and capable of error handling in a subtle but efficient manner so that it does not crash  

Security: Appropriate security measures, such as encryption and access control, will be implemented to protect sensitive donor information and maintain data integrity. 

Accessibility: The web application should be accessible across various browsers and devices, ensuring universal access for donors and administrators. 

 

System Architecture 

Include a system architecture diagram – show the interconnection of the webserver i.e apache tomcat, database i.e mysql, firebase, API if any etc 

Use Case Diagram 

The use case diagram illustrates the primary actors and their interactions with the Dynamic Donations system. The "Administrator" actor can manage the needs list, view donations, generate reports, and perform administrative tasks. The "Donor" actor can view the needs list, make donations, and track their donation history. 

 

Figure 4.1 use case diagram 

 

Class Diagram 

The class diagram represents the key classes and their relationships within the Dynamic Donations system. The "Donor" class holds the donor information and has a composition relationship with the "Donation" class. The "Admin" class hold the information of the administrator. 

 

Figure 4.2 Class diagram 

System Sequence Diagram 

The sequence diagram (Figure 4.3) illustrates the flow of events and interactions between the doner and the system. The Donor interacts with the donor interface to select items for donation from the needs list. The needs list is updated from the database. Figure 4.4 illustrates the interactions between the administrator and the system. 

 

Figure 4.3 Sequence diagram (doner) 

 

Figure 4.4 Sequence diagram (admin) 

 

Entity Relationship Diagram (ERD) 

The Entity Relationship Diagram (ERD) in Figure 4.5 represents the database schema and relationships between different entities within the Dynamic Donations system. The "User" entity stores donor information, while the "Donations" entity records donation details. The "Admin" entity has the administrator’s information. The relationships between these entities, such as one-to-many and many-to-many, are depicted in the diagram. 

Entity Relationship Diagram 

Figure 4.5 Entity Relationship Diagram 

 

 

References 

Chandra, S., & Singh, P. (2021). The role of communication in nonprofit donor engagement. Journal of Nonprofit Management, 8(2), 125-141. 

De Silva, D. I., Wijesundara, W. M. R. L., Godapitiya, M. V. N., Sameer, M. M., Aadhil, M. M., & Zamly, M. Z. M. (Year). Development of a Web-Based Charity Organizations and Donation Management System: A Case Study. 

De Silva, M. (2022). Improving donation management processes in charities. Nonprofit Quarterly, 17(3), 65-78. 

Gonzalez, J., & Williams, R. (2019). Enhancing donor experiences for increased retention. Nonprofit World, 25(4), 18-22. 

Kapur, A., & Mehta, S. (2022). Digitizing donation management: A comparative study of existing solutions. Nonprofit Technology Review, 9(1), 35-48. 

Khan, M., & Ali, R. (2021). Data privacy and security considerations in online donation platforms. Journal of Cybersecurity Research, 6(2), 112-127. 

Kumar, P., & Patel, R. (2023). Bridging the digital divide: Technology adoption among small charities. Nonprofit Management & Leadership, 33(4), 401-418. 

Lal, N., & Gupta, A. (2021). Improving the donor experience: A user-centered approach. Nonprofit User Experience, 2(1), 28-38. 

Shaheen, E., et al. (2021). A Track Donation System Using Blockchain. In 2021 International Conference on Electronic Engineering (ICEEM) (pp. 1-7). IEEE. https://doi.org/10.1109/ICEEM52022.2021.9480649 

Shaheen, E., et al. (2021). Donation management challenges faced by nonprofit organizations. Philanthropy Journal, 12(3), 56-71. 

Sharma, R., & Patel, K. (2023). Data-driven decision making in donation management. Nonprofit Analytics Quarterly, 5(1), 18-32. 

Singh, A., & Kapoor, R. (2020). Integrating donation management with inventory systems. Nonprofit Technology Review, 7(2), 42-55. 

Smith, J., & Johnson, M. (2020). Transparent communication of needs: A key challenge for charities. Nonprofit Communication Strategies, 3(1), 15-28. 

 

 

Appendices 

Appendix 1: Gantt Chart 

 

Figure 4.6 Gantt chart 

 

 
