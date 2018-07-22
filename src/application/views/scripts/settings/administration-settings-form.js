Settings.AdministrationSettingsForm = Ext.extend(Ext.Window, {
	id_settings: 0,
	modal: true,
	constrain: true,
	maximizable: false,
	resizable: false,
	width: 450,
	height: 125,
	iconCls:'icon-config',
	title: Application.app.language('administration.config.form.title'),
	layout: 'fit',
	closeAction: 'hide',
	setid: function(id) {
		this.id_settings = id;
	},
	constructor: function() {
		this.addEvents({salvar: true});
		Settings.AdministrationSettingsForm.superclass.constructor.apply(this, arguments);
	},
	initComponent: function() {
		this.formSettings = new Ext.form.FormPanel({
			bodyStyle: 'padding:10px;',
			border: false,
			autoScroll: true,
			defaultType: 'textfield',
			defaults: {anchor: '-19'},
			items:[
				{fieldLabel: Application.app.language('administration.config.form.name.text'), disabled: 'disabled', name: 'name', allowBlank: false, maxLength: 255},
				{fieldLabel: Application.app.language('administration.config.form.value.text'), name: 'value', allowBlank: false, maxLength: 255}
			]
		});
		Ext.apply(this, {
			items: this.formSettings,
			bbar: [
				'->',
				{text: Application.app.language('grid.form.save'), iconCls: 'icon-save',scope: this,handler: this._onBtnSalvarClick},
				{text: Application.app.language('grid.form.cancel'), iconCls: 'silk-cross', scope: this, handler: this._onBtnCancelarClick}
			]
		});
		Settings.AdministrationSettingsForm.superclass.initComponent.call(this);
	},
	show: function() {
		this.formSettings.getForm().reset();
		Settings.AdministrationSettingsForm.superclass.show.apply(this, arguments);
		if(this.id_settings !== 0) {
			this.el.mask(Application.app.language('grid.form.loading'));
			this.formSettings.getForm().load({
				waitTitle: Application.app.language("auth.alert"),
				waitMsg: Application.app.language("auth.loading"),
				fail: Application.app.faiHandler,
				url: 'settings/get',
				params: {
					id: this.id_settings
				},
				scope: this,
				success: this._onFormLoad
			});
		}
	},
	onDestroy: function() {
		Settings.AdministrationSettingsForm.superclass.onDestroy.apply(this, arguments);
		this.formSettings = null;
	},
	_onFormLoad: function(form, request) {
		if (request.result.data.system == true) {
			this.el.unmask();
			Application.app.showMessageBox({title: Application.app.language('grid.form.alert.title'), msg: Application.app.language('administration.config.form.systemerror')});
			this.hide();
		} else {
			this.el.unmask();
		}
	},
	_onBtnSalvarClick: function() {
		var form = this.formSettings.getForm();
		if(!form.isValid()) {
			Application.app.showMessageBox({title: Application.app.language('grid.form.alert.title'), msg: Application.app.language('grid.form.alert.invalid')});
			return false;
		}
		this.el.mask(Application.app.language('grid.form.saving'));
		form.submit({
			url: 'settings/save',
			params: {
				id: this.id_settings
			},
			scope:this,
			success: function() {
				this.el.unmask();
				this.hide();
				this.fireEvent('salvar', this);
			},
			failure: function () {
				this.el.unmask();
			}
		});
	},
	_onBtnCancelarClick: function() {
		this.hide();
	}
});
