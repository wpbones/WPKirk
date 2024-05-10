import { List } from '@mantine/core';

export const Mantine = () => {
  return (
    <>
      <p>
        The <a href="https://mantine.dev/">Mantine UI Library</a> is a collection of React components that are designed
        to be simple, easy to use, and accessible. The library is built with TypeScript and has a small bundle size,
        making it a great choice for building modern web applications.
      </p>
      <p>Some of the key features of Mantine include:</p>
      <p>
        <List size="sm" withPadding>
          <List.Item>Simple and easy-to-use components</List.Item>
          <List.Item>Accessible design and keyboard navigation</List.Item>
          <List.Item>Dark mode support</List.Item>
          <List.Item>Customizable styles and themes</List.Item>
          <List.Item>Support for TypeScript</List.Item>
          <List.Item>Small bundle size</List.Item>
          <List.Item>Active development and community support</List.Item>
          <List.Item>And much more!</List.Item>
        </List>
      </p>
    </>
  );
};
