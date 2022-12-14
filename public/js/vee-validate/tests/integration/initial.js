import { shallow, createLocalVue } from 'vue-test-utils';
import flushPromises from 'flush-promises';
import VeeValidate from './../../src/index';
import TestComponent from './components/Initial';

const Vue = createLocalVue();
Vue.use(VeeValidate);

test('validates input initially when .initial modifier is set', async () => {
  const wrapper = shallow(TestComponent, { localVue: Vue });

  await flushPromises();
  expect(wrapper.vm.errors.count()).toBe(1);
});
