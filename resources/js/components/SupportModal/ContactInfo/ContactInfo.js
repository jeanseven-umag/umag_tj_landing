import { Avatar, Flex, Grid, Text } from "@mantine/core";

export const ContactInfo = () => {
  return (
    <Flex id="contactHelper" direction="column" my={20}>
      <Text mb={12} className="contact-info__caption">
        Менеджер
      </Text>
      <Grid align="center">
        <Grid.Col span={3}>
          <Avatar
            size={100}
            radius="100%"
            src="/images/contact-helper/avatar.png"
          />
        </Grid.Col>
        <Grid.Col span={9}>
          <Flex direction="column">
            <Text className="contact-info-name">Менеджер Айдана</Text>
            <Text mb={12} className="contact-info">
              aidana@umag.kz
            </Text>
            <Text className="contact-info">+7 (775) 486 38 22</Text>
          </Flex>
        </Grid.Col>
      </Grid>
    </Flex>
  );
};
