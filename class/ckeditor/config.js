/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
	config.toolbarGroups = [
		{ name: 'document', groups: ['mode', 'document', 'doctools'] },
		{ name: 'clipboard', groups: ['clipboard', 'undo'] },
		{ name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
		{ name: 'forms', groups: ['forms'] },
		{ name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
		{ name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
		{ name: 'links', groups: ['links'] },
		{ name: 'insert', groups: ['insert'] },
		{ name: 'styles', groups: ['styles'] },
		{ name: 'colors', groups: ['colors'] },
		{ name: 'tools', groups: ['tools'] },
		{ name: 'others', groups: ['others'] },
		{ name: 'about', groups: ['about'] }
	];

	config.removeButtons = 'Iframe,NewPage,Preview,Print,Paste,PasteFromWord,Cut,Copy,Undo,Redo,Find,Replace,SelectAll,CreateDiv,Blockquote,BidiLtr,BidiRtl,Language,Flash,About';

	config.stylesSet = [
		// Block-level styles
		{ name: '陰影標題h2', element: 'h2', styles: { 'text-shadow': '1px 1px 1px #aaaaaa' } },
		{ name: '陰影標題h3', element: 'h3', styles: { 'text-shadow': '1px 1px 1px #aaaaaa' } },
		{ name: 'well 圓角框', element: 'div', attributes: { 'class': 'well' } },
		{ name: 'Info 提示框', element: 'div', attributes: { 'class': 'alert alert-info' } },
		{ name: 'Success 提示框', element: 'div', attributes: { 'class': 'alert alert-success' } },
		{ name: 'Warning 提示框', element: 'div', attributes: { 'class': 'alert alert-warning' } },
		{ name: 'Danger 提示框', element: 'div', attributes: { 'class': 'alert alert-danger' } },

		// Inline styles
		{ name: '自適應圖片', element: 'img', styles: { 'height': 'auto' }, attributes: { 'class': 'img-responsive' } },
		{ name: '自適應圖框', element: 'img', styles: { 'height': 'auto' }, attributes: { 'class': 'img-responsive img-thumbnail' } },
		{ name: 'Default 標籤', element: 'span', attributes: { 'class': 'label label-default' } },
		{ name: 'Primary 標籤', element: 'span', attributes: { 'class': 'label label-primary' } },
		{ name: 'Success 標籤', element: 'span', attributes: { 'class': 'label label-success' } },
		{ name: 'Info 標籤', element: 'span', attributes: { 'class': 'label label-info' } },
		{ name: 'Warning 標籤', element: 'span', attributes: { 'class': 'label label-warning' } },
		{ name: 'Danger 標籤', element: 'span', attributes: { 'class': 'label label-danger' } }
	];

	config.filebrowserBrowseUrl = 'class/elFinder/elfinder_cke.php';
};
