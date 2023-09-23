USE [master]
IF NOT EXISTS ( SELECT  * FROM sys.schemas WHERE name = N'fm' )    EXEC('CREATE SCHEMA [fm] authorization [dbo]')
SELECT * FROM sys.schemas
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
CREATE TABLE [fm].[user_login]( [id] [int] IDENTITY(1,1) NOT NULL ,
   [phone_number] [bigint] NOT NULL, 
   [user_password] [varchar](50) NOT NULL, 
   [user_name] [varchar](50) NOT NULL, 
   [institution_name] [varchar](50) NOT NULL, 
   [email_id] [varchar](50) NOT NULL, 
   [createdate] [datetime2](2) NOT NULL,   
   [createby] [varchar](20) NOT NULL,  
   [updatedate] [datetime2](2) NOT NULL,   
   [updateby] [varchar](20) NOT NULL
   ) ON [PRIMARY]
   ALTER TABLE [fm].[user_login] ADD  CONSTRAINT [user_login_createdate]  DEFAULT (sysutcdatetime()) FOR [createdate]
   ALTER TABLE [fm].[user_login] ADD  CONSTRAINT [user_login_createby]  DEFAULT (suser_sname()) FOR [createby]
   ALTER TABLE [fm].[user_login] ADD  CONSTRAINT [user_login_updatedate]  DEFAULT (sysutcdatetime()) FOR [updatedate]
   ALTER TABLE [fm].[user_login]  ADD  CONSTRAINT [user_login_updateby]  DEFAULT (suser_sname()) FOR [updateby]
   ALTER TABLE [fm].[user_login] ADD CONSTRAINT PK_user_login PRIMARY KEY  ([id])
   ALTER TABLE [fm].[user_login] ADD CONSTRAINT CK_user_login1 UNIQUE ([phone_number])
   CREATE TABLE [fm].[feedback]( [id] [int] IDENTITY(1,1) NOT NULL ,
   [phone_number] [bigint] NOT NULL, 
   [fb_event_name] [varchar](50) NOT NULL, 
   [fb_comment] [varchar](2000) NOT NULL, 
   [createdate] [datetime2](2) NOT NULL 
   ) ON [PRIMARY]
   ALTER TABLE [fm].[feedback] ADD  CONSTRAINT [feedback_createdate]  DEFAULT (sysutcdatetime()) FOR [createdate]
   ALTER TABLE [fm].[feedback] ADD CONSTRAINT PK_feedback PRIMARY KEY ([id])
   ALTER TABLE [fm].[feedback] ADD CONSTRAINT FK_feedback FOREIGN KEY (phone_number) REFERENCES [fm].[user_login](phone_number)
   ALTER TABLE [fm].[feedback] DROP CONSTRAINT FK_feedback
    CREATE TABLE [fm].[club_details]( [club_id] [varchar](50)  NOT NULL ,
   [club_name] [varchar](50) NOT NULL, 
   [office_bearer_name] [varchar](50) NOT NULL, 
   [mentor_name] [varchar](50) NOT NULL, 
   [office_bearer_phone_number] [int] NOT NULL ,
   [createdate] [datetime2](2) NOT NULL,   
   [createby] [varchar](20) NOT NULL,  
   [updatedate] [datetime2](2) NOT NULL,   
   [updateby] [varchar](20) NOT NULL
   ) ON [PRIMARY]
   ALTER TABLE [fm].[club_details] ADD  CONSTRAINT [club_details_createdate]  DEFAULT (sysutcdatetime()) FOR [createdate]
   ALTER TABLE [fm].[club_details] ADD  CONSTRAINT [club_details_createby]  DEFAULT (suser_sname()) FOR [createby]
   ALTER TABLE [fm].[club_details] ADD  CONSTRAINT [club_details_updatedate]  DEFAULT (sysutcdatetime()) FOR [updatedate]
   ALTER TABLE [fm].[club_details]  ADD  CONSTRAINT [club_details_updateby]  DEFAULT (suser_sname()) FOR [updateby]
   ALTER TABLE [fm].[club_details] ADD CONSTRAINT PK_club_details PRIMARY KEY  ([club_id])
   ALTER TABLE fm.club_details ALTER COLUMN [office_bearer_phone_number] [bigint] NOT NULL
   CREATE TABLE [fm].[event_details]( [event_id] [varchar](50) NOT NULL  , 
   [event_name] [varchar](50) NOT NULL, 
   [event_judge] [varchar](50) NOT NULL, 
   [club_id] [varchar](50) NOT NULL,
   [club_name] [varchar](50) NOT NULL,
   [createdate] [datetime2](2) NOT NULL,   
   [createby] [varchar](20) NOT NULL,  
   [updatedate] [datetime2](2) NOT NULL,   
   [updateby] [varchar](20) NOT NULL
   ) ON [PRIMARY]
   ALTER TABLE [fm].[event_details] ADD  CONSTRAINT [event_details_createdate]  DEFAULT (sysutcdatetime()) FOR [createdate]
   ALTER TABLE [fm].[event_details] ADD  CONSTRAINT [event_details_createby]  DEFAULT (suser_sname()) FOR [createby]
   ALTER TABLE [fm].[event_details] ADD  CONSTRAINT [event_details_updatedate]  DEFAULT (sysutcdatetime()) FOR [updatedate]
   ALTER TABLE [fm].[event_details]  ADD  CONSTRAINT [event_details_updateby]  DEFAULT (suser_sname()) FOR [updateby]
   ALTER TABLE [fm].[event_details] ADD CONSTRAINT PK_event_details PRIMARY KEY  (event_id)
   ALTER TABLE [fm].[event_details] ADD CONSTRAINT FK_event_details FOREIGN KEY (club_id) REFERENCES [fm].[club_details](club_id);
   CREATE TABLE [fm].[event_registration]( [reg_Id] [int] IDENTITY(1,1) NOT NULL ,
   [event_id] [varchar](50) NOT NULL, 
   [phone_number] [bigint] NOT NULL, 
   [createdate] [datetime2](2) NOT NULL,   
   [createby] [varchar](20) NOT NULL,  
   [updatedate] [datetime2](2) NOT NULL,   
   [updateby] [varchar](20) NOT NULL
   ) ON [PRIMARY]
   ALTER TABLE [fm].[event_registration] ADD  CONSTRAINT [event_registration_createdate]  DEFAULT (sysutcdatetime()) FOR [createdate]
   ALTER TABLE [fm].[event_registration] ADD  CONSTRAINT [event_registration_createby]  DEFAULT (suser_sname()) FOR [createby]
   ALTER TABLE [fm].[event_registration] ADD  CONSTRAINT [event_registration_updatedate]  DEFAULT (sysutcdatetime()) FOR [updatedate]
   ALTER TABLE [fm].[event_registration] ADD  CONSTRAINT [event_registration_updateby]  DEFAULT (suser_sname()) FOR [updateby]
   ALTER TABLE [fm].[event_registration] ADD CONSTRAINT PK_event_registration PRIMARY KEY  (reg_Id)
   ALTER TABLE [fm].[event_registration] ADD CONSTRAINT FK_event_registration FOREIGN KEY (event_id) REFERENCES [fm].[event_details](event_id);
   ALTER TABLE [fm].[event_registration] ADD CONSTRAINT FK_event_registration_1 FOREIGN KEY (phone_number) REFERENCES [fm].[user_login](phone_number);
