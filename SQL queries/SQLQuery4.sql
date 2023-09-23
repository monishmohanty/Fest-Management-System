CREATE TABLE [fm].[orders]( [od_id] [int] IDENTITY(1,1) NOT NULL ,
	[pizza] [int],
	[burger] [int],
	[pasta] [int],
	[icecream] [int],
	[softdrink] [int],
	[createdate] [datetime2](2) NOT NULL,   
    [createby] [varchar](20) NOT NULL,  
    [updatedate] [datetime2](2) NOT NULL,   
    [updateby] [varchar](20) NOT NULL
    ) ON [PRIMARY]
	ALTER TABLE [fm].[orders] ADD  CONSTRAINT [orders_createdate]  DEFAULT (sysutcdatetime()) FOR [createdate]
    ALTER TABLE [fm].[orders] ADD  CONSTRAINT [orders_createby]  DEFAULT (suser_sname()) FOR [createby]
    ALTER TABLE [fm].[orders] ADD  CONSTRAINT [orders_updatedate]  DEFAULT (sysutcdatetime()) FOR [updatedate]
    ALTER TABLE [fm].[orders] ADD  CONSTRAINT [orders_updateby]  DEFAULT (suser_sname()) FOR [updateby]
    ALTER TABLE [fm].[orders] ADD CONSTRAINT PK_orders PRIMARY KEY  (od_id)

CREATE TABLE [fm].[sponsorship]( [id] [int] IDENTITY(1,1) NOT NULL ,
	[company_name] [varchar](100) NOT NULL, 
	[det] [varchar](500) NOT NULL,
	[amount] [int] NOT NULL,
	[sponsor_name] [varchar](50) NOT NULL,
	[createdate] [datetime2](2) NOT NULL,   
    [createby] [varchar](20) NOT NULL,  
    [updatedate] [datetime2](2) NOT NULL,   
    [updateby] [varchar](20) NOT NULL
    ) ON [PRIMARY]
	ALTER TABLE [fm].[sponsorship] ADD  CONSTRAINT [sponsorship_createdate]  DEFAULT (sysutcdatetime()) FOR [createdate]
    ALTER TABLE [fm].[sponsorship] ADD  CONSTRAINT [sponsorship_createby]  DEFAULT (suser_sname()) FOR [createby]
    ALTER TABLE [fm].[sponsorship] ADD  CONSTRAINT [sponsorship_updatedate]  DEFAULT (sysutcdatetime()) FOR [updatedate]
    ALTER TABLE [fm].[sponsorship] ADD  CONSTRAINT [sponsorship_updateby]  DEFAULT (suser_sname()) FOR [updateby]
    ALTER TABLE [fm].[sponsorship] ADD CONSTRAINT PK_sponsorship PRIMARY KEY  (id)

	select * from fm.sponsorship




   select * from fm.sponsorship